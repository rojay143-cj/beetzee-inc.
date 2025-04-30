<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{
    public function dashboard(){
        $disc = DB::table('discount')->get();
        $users = DB::table('users')
        ->join('role', 'users.role_id', '=', 'role.id')
        ->leftJoin('expenses', 'users.id', '=', 'expenses.user_id')
        ->leftJoin('discount', 'expenses.discount_id', '=', 'discount.id')
        ->where('role.id', '1002')
        ->select('expenses.updated_at', 'users.*', 'discount.*', 'expenses.*','role.*','users.*', 'expenses.created_at as expense_created_at', 'expenses.updated_at as expense_updated_at')
        ->get()
        ->sortBy('expenses.created_at');
        $history = DB::table('trans_hitory')
        ->leftJoin('expenses', 'expenses.id', '=', 'trans_hitory.expense_id')
        ->leftJoin('users', 'expenses.user_id', '=', 'users.id')
        ->select('trans_hitory.*', 'users.*', 'expenses.*','trans_hitory.amount as history_amount')
        ->orderBy('trans_hitory.created_at','desc')
        ->get();
        if(Auth::user()->role_id == 1001){
            return view('page.admin.dashboard')->with(['users' => $users, 'history' => $history, 'disc' => $disc]);
        }else{
            return redirect()->back()->with('error', "You're trying to access unauthorized page");
        }
    }
    public function member_dashboard(){
        $auth = Auth::user();
        $disc = DB::table('discount')->get();
        $users = DB::table('users')
        ->join('role', 'users.role_id', '=', 'role.id')
        ->leftJoin('expenses', 'users.id', '=', 'expenses.user_id')
        ->leftJoin('discount', 'discount.id', '=', 'expenses.discount_id')
        ->where('role.id', '1002')
        ->where('users.id', $auth->id)
        ->select('expenses.updated_at', 'users.*', 'discount.*', 'expenses.*','role.*','users.*', 'expenses.created_at as expense_created_at', 'expenses.updated_at as expense_updated_at')
        ->first();
        $history = DB::table('trans_hitory')
        ->leftJoin('expenses', 'expenses.id', '=', 'trans_hitory.expense_id')
        ->leftJoin('users', 'expenses.user_id', '=', 'users.id')
        ->where('user_id', $auth->id)
        ->select('trans_hitory.*', 'users.*', 'expenses.*','trans_hitory.amount as history_amount')
        ->orderBy('trans_hitory.created_at','desc')
        ->get();
        if($auth->role_id == 1001){
            return redirect()->back()->with('error', "You're trying to access unauthorized page");
        }else{
            return view('page.member.dashboard')->with(['users' => $users, 'history' => $history, 'disc' => $disc]);
        }
    }
}
