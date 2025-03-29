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
            'user_id' => 'required|integer',
        ]);

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
        $ref_num = rand(1000000000, 9999999999);
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
    public function subscription(Request $request) {
        $user = Auth::user();

        $currentSubscription = DB::table('users')->where('id', $user->id)->value('subscription');
    
        $newSubscription = ($currentSubscription === null || $currentSubscription === 'Subscribe') ? 'Unsubscribe' : 'Subscribe';
    
        DB::table('users')->where('id', $user->id)->update([
            'subscription' => $newSubscription
        ]);
    
        return redirect()->back()->with('success', 'Subscription status updated successfully.');
    }
    
}
