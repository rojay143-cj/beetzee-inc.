<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class member extends Controller
{
    public function pay(Request $request)
    {
        $validate = $request->validate([
            'amount' => 'required|integer',
            'ref_num' => 'nullable|string|unique:trans_hitory,ref_num',
            'user_id' => 'required|integer',
        ]);
        if(!$validate){
            return redirect()->back()->with('error', 'Please fill all the fields');
        }
        $expense = DB::table('expenses')->where('user_id', $validate['user_id'])->first();
        $discount = DB::table('discount')->get();
        $newExpense = ($expense ? $expense->amount : 0) + $validate['amount'];

        $discountNumber = 0;
        switch (true) {
            case $newExpense >= $discount[3]->limit:
                $discountNumber = $discount[3]->percentage;
                break;
            case $newExpense >= $discount[2]->limit:
                $discountNumber = $discount[2]->percentage;
                break;
            case $newExpense >= $discount[1]->limit:
                $discountNumber = $discount[1]->percentage;
                break;
            default:
                $discountNumber = $discount[0]->percentage;
        }

        $milestones = [$discount[1]->limit, $discount[2]->limit, $discount[3]->limit];
        $balance = 0;
        foreach ($milestones as $threshold) {
            if ($newExpense < $threshold) {
                $balance = $threshold - $newExpense;
                break;
            }
        }

        if($validate['ref_num'] == null && $request->hasFile('receipt') == null){
            return redirect()->back()->with('error', 'Please provide a reference number or upload a receipt.');
        }
        $receipt_url = null;
        if($request->hasFile('receipt') != null){
            $receipt_img = $request->file('receipt');
            $receipt_name = time() . '.' . $receipt_img->getClientOriginalExtension();
            $receipt_path = public_path('Asset/image/receipts');
            $receipt_img->move($receipt_path, $receipt_name);
            $receipt_url = 'Asset/image/receipts/' . $receipt_name;
        }
        $ref_num = $validate['ref_num'] ?? null;
        if ($expense) {
            $pay = DB::table('expenses')
                ->where('user_id', $validate['user_id'])
                ->update([
                    'amount' => $newExpense,
                    'balance' => $balance,
                    'discount_id' => $discountNumber,
                    'updated_at' => now(),
                ]);
        } else {
            $pay = DB::table('expenses')->insert([
                'user_id' => $validate['user_id'],
                'amount' => $validate['amount'],
                'balance' => $balance,
                'discount_id' => $discountNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        if ($pay) {
            $expense = DB::table('expenses')->where('user_id', $validate['user_id'])->first();

            if ($expense) {
                DB::table('trans_hitory')->insert([
                    'expense_id' => $expense->id,
                    'amount' => $validate['amount'],
                    'receipt_img' => $receipt_url,
                    'status' => 'success',
                    'type' => 'Counter',
                    'ref_num' => $ref_num,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                return redirect()->back()->with('error', 'No expense record found for this user.');
            }
            return redirect()->back()->with('success', 'Payment Successful');
        } else {
            return redirect()->back()->with('error', 'Payment Failed');
        }
    }
    public function discount(Request $request)
    {
        $validate = $request->validate([
            'per_cent' => 'required|integer',
            'per_amount' => 'required|integer',
            'target' => 'required|integer',
        ]);

        $discount = DB::table('discount')->insert([
            'percentage' => $validate['per_cent'],
            'limit' => $validate['per_amount'],
            'target' => $validate['target'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($discount) {
            return redirect()->back()->with('success', 'Discount Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Discount Not Added');
        }
    }
    public function Insertdiscount(Request $request)
    {
        $validate = $request->validate([
            'per_cent' => 'required|integer',
            'per_amount' => 'required|integer',
            'target' => 'required|integer',
        ]);

        $discount = DB::table('discount')->insert([
            'percentage' => $validate['per_cent'],
            'limit' => $validate['per_amount'],
            'target' => $validate['target'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($discount) {
            return redirect()->back()->with('success', 'Discount Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Discount Not Added');
        }
    }
    public function Updatediscount(Request $request)
    {
        $validate = $request->validate([
            'discount_id' => 'required|integer',
            'per_cent' => 'nullable|integer',
            'per_amount' => 'nullable|integer',
            'target' => 'nullable|integer',
        ]);

        $updateData = [];
        if ($request->filled('per_cent')) {
            $updateData['percentage'] = $request->per_cent;
        }
        if ($request->filled('per_amount')) {
            $updateData['limit'] = $request->per_amount;
        }
        if ($request->filled('target')) {
            $updateData['target'] = $request->target;
        }

        if (!empty($updateData)) {
            $updateData['updated_at'] = now();

            $updateDiscount = DB::table('discount')
                ->where('id', $validate['discount_id'])
                ->update($updateData);

            if ($updateDiscount) {
                return redirect()->back()->with('success', 'Discount Updated Successfully');
            }
        }

        return redirect()->back()->with('error', 'No changes made');
    }
    public function Deletediscount(Request $request)
    {
        $validate = $request->validate([
            'discount_id' => 'required|integer',
        ]);

        $deleteDiscount = DB::table('discount')
            ->where('id', $validate['discount_id'])
            ->delete();

        if ($deleteDiscount) {
            return redirect()->back()->with('success', 'Discount Deleted Successfully');
        }

        return redirect()->back()->with('error', 'Discount Not Deleted');
    }
    public function subscription(Request $request)
    {
        $user = Auth::user();

        $currentSubscription = DB::table('users')->where('id', $user->id)->value('subscription');

        $newSubscription = ($currentSubscription === null || $currentSubscription === 'Subscribe') ? 'Unsubscribe' : 'Subscribe';

        DB::table('users')->where('id', $user->id)->update([
            'subscription' => $newSubscription
        ]);

        return redirect()->back()->with('success', 'Subscription status updated successfully.');
    }
}
