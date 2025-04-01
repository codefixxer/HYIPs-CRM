<?php

namespace App\Http\Controllers\Admin;
// app/Http/Controllers/Admin/BankController.php

use App\Models\Bank;
use App\Models\User;
use App\Models\Package;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; 
use App\Http\Controllers\Admin;

class TransactionController extends Controller
{





    public function acceptTransaction(Request $request, $id)
    {
        // Get the transaction
        $transaction = Transaction::findOrFail($id);
    
        // Ensure the transaction is not already completed or rejected
        if ($transaction->status != 'pending') {
            return redirect()->route('admin.transactions.index')->with('error', 'Transaction already processed!');
        }
    
        // Get the user and package data related to the transaction
        $user = $transaction->user;
        $package = $transaction->package;
    
        // Calculate the first profit: 10% of the investment amount
        $first_profit = ($package->investment_amount * 10) / 100;
    
        // Update the transaction's total balance and total profit
        $transaction->total_balance = $package->investment_amount + $first_profit; // initial balance = investment + 10% profit
        $transaction->total_profit = $first_profit;  // first profit calculation
        $transaction->status = 'completed'; // Mark as completed
        $transaction->save();
    
        // Redirect with success message
        return redirect()->route('admin.transactions.index')
            ->with('success', 'Transaction accepted and first profit calculated!');
    }
    



        public static function calculateDailyProfit()
        {
            // Get all users that have accepted transactions and are actively earning profit
            $users = User::all();
        
            foreach ($users as $user) {
                // Loop through each user's transactions
                $transactions = $user->transactions;
        
                foreach ($transactions as $transaction) {
                    // Only process completed transactions
                    if ($transaction->status == 'completed') {
        
                        // Get the related package and profit percentage
                        $package = $transaction->package;
                        $profit_percentage = $package->profit_percentage;
        
                        // Get the current balance for the specific transaction
                        $current_balance = $transaction->total_balance;
        
                        // Calculate daily profit based on the current balance and profit percentage
                        $daily_profit = ($current_balance * $profit_percentage) / 100;
        
                        // Update the transaction's total profit and balance
                        $transaction->total_profit += $daily_profit;
                        $transaction->total_balance += $daily_profit;
        
                        // Save the updated transaction data
                        $transaction->save();
        
                        // Log the information
                        Log::info("User {$user->name} - Transaction {$transaction->transaction_id} - Profit Calculated: {$daily_profit} - New Balance: {$transaction->total_balance} - Total Profit: {$transaction->total_profit}");
                    }
                }
            }
        }
    












    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $transactions = Transaction::with(['user', 'package'])->get();
        } else {
            $transactions = Transaction::with(['user', 'package'])->where('user_id', Auth::id())->get();
        }
    
        // Return the appropriate view
        return view(Auth::user()->role === 'admin' ? 'admin.pages.transactions.index' : 'user.pages.transactions.index', compact('transactions'));
    }
    
    

   
    public function create()
    {
        $users = User::all();
        $packages = Package::all();
        $banks = Bank::all(); // Get all the bank accounts
        
        // Get the authenticated user's role
        $user = \App\Models\User::find(Auth::id());
        
        // Check if the user is an admin
        if ($user && $user->role === 'admin') {
            // If the user is an admin, return the admin view with the banks
            return view('admin.pages.transactions.create', compact('users', 'packages', 'banks'));
        } else {
            // If the user is not an admin, return the user view with the packages
            return view('user.pages.transactions.create', compact('packages', 'banks'));
        }
    }
    

   


   
    public function edit($id)
    {
        // Fetch the transaction by ID
        $transaction = Transaction::findOrFail($id);
    
        // Get all users and packages
        $users = User::all();
        $packages = Package::all();
    
        // Get the authenticated user's role
        $user = \App\Models\User::find(Auth::id());
    
        // Check if the user is an admin
        if ($user && $user->role === 'admin') {
            // If the user is an admin, return the admin view
            return view('admin.pages.transactions.create', compact('transaction', 'users', 'packages'));
        } else {
            // If the user is not an admin, return the user view
            return view('user.pages.transactions.create', compact('transaction', 'packages'));
        }
    }
    



    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'package_id' => 'required|exists:packages,id',
            'transaction_id' => 'required|string',
            'payment_receipt' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ];
    
        // If the user is an admin, validate user_id
        if (Auth::user()->role === 'admin') {
            $rules['user_id'] = 'required|exists:users,id';
        } else {
            // If the user is not an admin, automatically use Auth::id() for user_id
            $request->merge(['user_id' => Auth::id()]);
        }
    
        // Validate the request data based on the defined rules
        $request->validate($rules);
    
        // Fetch the selected package
        $package = Package::findOrFail($request->package_id);
        $investment_amount = $package->investment_amount;
    
        // Handle the payment receipt file upload if present
        $path = $request->hasFile('payment_receipt')
            ? $request->file('payment_receipt')->store('payment_receipts', 'public')
            : null;
    
        // Create the new transaction
        Transaction::create([
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'transaction_amount' => $investment_amount,
            'transaction_id' => $request->transaction_id,
            'payment_receipt' => $path,
            'status' => 'pending',
        ]);
    
        // Redirect to the appropriate route based on user role
        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.transactions.index' : 'user.transactions.index')
            ->with('success', 'Transaction created successfully!');
    }
    



    public function update(Request $request, $id)
    {
        // Define validation rules
        $rules = [
            'package_id' => 'required|exists:packages,id',
            'transaction_id' => 'required|string',
            'payment_receipt' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ];
    
        // If the user is an admin, validate user_id
        if (Auth::user()->role === 'admin') {
            $rules['user_id'] = 'required|exists:users,id';
        } else {
            // If the user is not an admin, automatically use Auth::id() for user_id
            $request->merge(['user_id' => Auth::id()]);
        }
    
        // Validate the request data based on the defined rules
        $request->validate($rules);
    
        // Fetch the selected package
        $package = Package::findOrFail($request->package_id);
        $investment_amount = $package->investment_amount;
    
        // Find the transaction by ID
        $transaction = Transaction::findOrFail($id);
    
        // Handle the payment receipt file upload if present
        $path = $request->hasFile('payment_receipt')
            ? $request->file('payment_receipt')->store('payment_receipts', 'public')
            : $transaction->payment_receipt;
    
        // Update the transaction with new data
        $transaction->update([
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'transaction_amount' => $investment_amount,
            'transaction_id' => $request->transaction_id,
            'payment_receipt' => $path,
            'status' => 'pending',
        ]);
    
        // Redirect to the appropriate route based on user role
        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.transactions.index' : 'user.transactions.index')
            ->with('success', 'Transaction updated successfully!');
    }
    


   
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.transactions.index' : 'user.transactions.index')
        ->with('success', 'Transaction deleted successfully!');

    }

   
    public function getPackageDetails($id)
    {
        $package = Package::findOrFail($id);
        return response()->json([
            'profit_percentage' => $package->profit_percentage,
            'investment_amount' => $package->investment_amount,
        ]);
    }
}
