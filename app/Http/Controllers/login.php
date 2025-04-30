<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class login extends Controller
{
    public function registration(Request $request)
    {
        $ajaxValue = $request->all();
        $register = DB::table('users')
            ->insertGetId([
                'agreement' => $ajaxValue['agreement'],
                'first_name' => $ajaxValue['fname'],
                'last_name' => $ajaxValue['lname'],
                'email' => $ajaxValue['email'],
                'role_id' => 1002,
                'password' => bcrypt($ajaxValue['password']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        if ($register) {
            return "Account Created Successfully";
        } else {
            return "Account Not Created";
        }
        return $ajaxValue;
    }
        public function admin_reg(Request $request) {
            $validate = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users,email',
                'number' => 'required|string|unique:users,number',
                'address' => 'nullable|string|max:255',
                'password' => 'required|string|min:3',
            ]);
            $register = DB::table('users')
                ->insertGetId([
                    'first_name' => $validate['first_name'],
                    'last_name' => $validate['last_name'],
                    'email' => $validate['email'],
                    'number' => $validate['number'],
                    'address' => $validate['address'],
                    'role_id' => 1001,
                    'password' => bcrypt($validate['password']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        
            if ($register) {
                return redirect()->back()->with('success', 'Account Created Successfully');
            } else {
                return redirect()->back()->with('error', 'Account Not Created');
            }
        }
    public function profile(Request $request) {
        $user = Auth::user();
    
        $validate = $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|unique:users,email,' . $user->id,
            'number' => 'nullable|string|max:20|unique:users,number,' . $user->id,
            'password' => 'nullable|string|min:8',
            'address' => 'nullable|string|max:255',
            'profile_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $updateData = collect($request->only(['first_name', 'last_name', 'email', 'number', 'address', 'password']))
            ->filter()
            ->toArray();
    
        if (isset($updateData['password'])) {
            $updateData['password'] = Hash::make($updateData['password']);
        }
    
        if ($request->hasFile('profile_img')) {
            if ($user->profile_img) {
                $oldImagePath = public_path($user->profile_img);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $image = $request->file('profile_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/profile/' . $filename;
            $image->move(public_path('uploads/profile'), $filename);
    
            $updateData['profile_img'] = $imagePath;
        }
    
        if (!empty($updateData)) {
            DB::table('users')->where('id', $user->id)->update($updateData);
            return redirect()->back()->with('success', 'Your Profile Updated Successfully');
        }
    
        return redirect()->back()->with('error', 'Failed to update profile');
    }    
    public function loginPost(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data = $request->all();
        if(Auth::attempt($credential)){
            $userType = Auth::user()->role_id;
            if(isset($request['remember_me']) && !empty($request['remember_me'])){
                setcookie('email', $credential['email'], time() + (86400 * 30), "/");
                setcookie('password', $credential['password'], time() + (86400 * 30), "/");
            }else{
                setcookie('email', "");
                setcookie('password', "");
            }
            switch($userType){
                case 1002:
                    return redirect()->intended(route('member_dashboard'));
                case 1001:
                    return redirect()->intended(route('admin_dashboard'));
                default:
                    return abort(403, 'Unauthorized Access.');
            }
        }else{
            return redirect()->back()->with('error', 'Email or Password is incorrect.');
        }
    }
    public function loginPage(){
        $activeUser = Auth::user();
        if(empty($activeUser)){
            return view('home');
        }
        $userInfo = DB::table('users')
        ->where('users.id', $activeUser->id)
        ->leftJoin('role', 'users.role_id', '=', 'role.id')
        ->leftJoin('expenses', 'users.id', '=', 'expenses.user_id')
        ->leftJoin('discount', 'discount.id', '=', 'expenses.discount_id')
        ->select('expenses.updated_at', 'users.*', 'discount.*', 'expenses.*','role.*','users.*', 'expenses.created_at as expense_created_at', 'expenses.updated_at as expense_updated_at')
        ->first();
        return view('home')->with(['userInfo' => $userInfo]);
    }
    public function beetzers(){
        if(Auth::check()){
            return redirect()->back()->with('error', "You're trying to access unauthorized page");
        }else{
            return view('component.login');
        }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('beetzers');
    }
}
