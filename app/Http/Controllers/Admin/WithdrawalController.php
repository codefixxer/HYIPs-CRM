<?php
// app/Http/Controllers/Admin/WithdrawalController.php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{




    public function history()
    {
        // Fetch the approved withdrawals for the authenticated user
        $withdrawals = Withdrawal::where('user_id', Auth::id())
            ->where('status', 'approved')  // Only approved withdrawals
            ->get();
    
        // Pass the withdrawals to the view
        return view('user.pages.withdrawals.history', compact('withdrawals'));
    }
    

    public function approve($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);

        if ($withdrawal->status == 'pending') {
            $transaction = Transaction::findOrFail($withdrawal->trans_id);

            if ($withdrawal->withdrawal_amount <= $transaction->total_balance) {
                $transaction->total_balance -= $withdrawal->withdrawal_amount;
                $transaction->save();

                $withdrawal->status = 'approved';
                $withdrawal->approved_at = now();
                $withdrawal->save();

                return redirect()->route(Auth::user()->role === 'admin' ? 'admin.withdrawals.index' : 'user.withdrawals.index')
                    ->with('success', 'Withdrawal approved and amount deducted from transaction balance.');
            } else {
                return redirect()->route(Auth::user()->role === 'admin' ? 'admin.withdrawals.index' : 'user.withdrawals.index')
                    ->with('error', 'Insufficient balance in the transaction to approve the withdrawal.');
            }
        } else {
            return redirect()->route(Auth::user()->role === 'admin' ? 'admin.withdrawals.index' : 'user.withdrawals.index')
                ->with('error', 'This withdrawal has already been processed.');
        }
    }




















    public function index()
    {
        $withdrawals = Withdrawal::with('user')->get();
        return view(Auth::user()->role === 'admin' ? 'admin.pages.withdrawals.index' : 'user.pages.withdrawals.index', compact('withdrawals'));
    }

    public function create()
    {
        $users = User::all();
        $transactions = [];
        $selected_balance = 0;

        if (Auth::check()) {
            $transactions = Transaction::where('user_id', Auth::id())
                ->where('status', 'completed')
                ->get();
        }

        if (request()->has('trans_id')) {
            $transaction = Transaction::find(request()->trans_id);

            if ($transaction) {
                $selected_balance = $transaction->total_balance;
            }
        }

        return view(Auth::user()->role === 'admin' ? 'admin.pages.withdrawals.create' : 'user.pages.withdrawals.create', compact('users', 'transactions', 'selected_balance'));
    }


    public function edit($id)
    {
        $withdrawal = Withdrawal::with('user', 'transaction')->findOrFail($id);
        $users = User::all();
        $transactions = Transaction::where('status', 'completed')->get();
        $selected_balance = $withdrawal->transaction->total_balance ?? 0;

        return view(Auth::user()->role === 'admin' ? 'admin.pages.withdrawals.create' : 'user.pages.withdrawals.create', compact('withdrawal', 'users', 'transactions', 'selected_balance'));
    }


















    // Store a new withdrawal request
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'trans_id' => 'required|exists:users,id',
            'withdrawal_amount' => 'required|numeric|min:1',
            'account_number' => 'required|string',
            'status' => 'required|in:pending,approved,rejected',
            'bank_name' => 'nullable|string',
            'admin_note' => 'nullable|string',
        ]);

        // Create a new withdrawal request
        Withdrawal::create([
            'user_id' => Auth::id(),
            'trans_id' => $request->trans_id,
            'withdrawal_amount' => $request->withdrawal_amount,
            'account_number' => $request->account_number,
            'status' => $request->status,
            'bank_name' => $request->bank_name,
            'admin_note' => $request->admin_note,
        ]);

        // Redirect back with success message
        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.withdrawals.index' : 'user.withdrawals.index')
        ->with('success', 'Withdrawal request created successfully!');
        }


    // Update an existing withdrawal request
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'trans_id' => 'required|exists:users,id',
            'withdrawal_amount' => 'required|numeric|min:1',
            'account_number' => 'required|string',
            'status' => 'required|in:pending,approved,rejected',
            'bank_name' => 'nullable|string',
            'admin_note' => 'nullable|string',
        ]);

        // Find the withdrawal and update it
        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->update([
            'user_id' => Auth::id(),
            'trans_id' => $request->trans_id,
            'withdrawal_amount' => $request->withdrawal_amount,
            'account_number' => $request->account_number,
            'status' => $request->status,
            'bank_name' => $request->bank_name,
            'admin_note' => $request->admin_note,
        ]);

        // Redirect back with success message
        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.withdrawals.index' : 'user.withdrawals.index')
        ->with('success', 'Withdrawal request updated successfully!');
        }

    // Delete a withdrawal request
    public function destroy($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->delete();

        // Redirect back with success message
        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.withdrawals.index' : 'user.withdrawals.index')
        ->with('success', 'Withdrawal request deleted successfully!');
        }







    }
