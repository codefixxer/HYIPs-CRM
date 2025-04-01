<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{



    public function dashboard()

    {
        $users = User::all();

        // Get the total number of users created until now (all-time users)
        $totalUsers = User::where('role', 'user')->count();
        
        // Get the total number of users created this month
        $totalUsersThisMonth = User::where('role', 'user')
            ->whereMonth('created_at', now()->month)  // Get users created this month
            ->count();
        
        // Get the total number of users created last month
        $totalUsersLastMonth = User::where('role', 'user')
            ->whereMonth('created_at', now()->subMonth()->month)  // Get users created last month
            ->count();
        
        // Calculate the percentage increase from last month to this month
        $percentageIncrease = $totalUsersLastMonth > 0 ? ( ($totalUsersThisMonth - $totalUsersLastMonth) / $totalUsersLastMonth ) * 100 : 0;
    
        // Total investment (completed transactions)
        $totalInvestment = Transaction::where('status', 'completed')
            ->sum('transaction_amount');
    
        // Total investment for this month (completed transactions)
        $totalInvestmentThisMonth = Transaction::where('status', 'completed')
            ->whereMonth('created_at', now()->month)  // Get transactions from this month
            ->sum('transaction_amount');
    
        // Total completed transactions
        $totalCompletedTransactions = Transaction::where('status', 'completed')->count();
    
        // Total completed transactions this month
        $totalCompletedTransactionsThisMonth = Transaction::where('status', 'completed')
            ->whereMonth('created_at', now()->month)  // Get completed transactions from this month
            ->count();
    
        // Pass the data to the view
        return view('admin.pages.dashboard', compact(
            'totalUsers', 
            'totalUsersThisMonth', 
            'percentageIncrease',
            'totalInvestment', 
            'totalInvestmentThisMonth',
            'totalCompletedTransactions',
            'totalCompletedTransactionsThisMonth',
            'users'
        ));
    }
    
    
























    public function wallet()
    {


        $totalBalance = Transaction::where('user_id', Auth::id())->sum('total_balance');
        
        // Total profit from transactions
        $totalProfit = Transaction::where('user_id', Auth::id())->sum('total_profit');
        
        // Total withdrawals (spending) approved
        $totalWithdrawals = Withdrawal::where('user_id', Auth::id())
            ->where('status', 'approved')  // Only approved withdrawals
            ->sum('withdrawal_amount');
        
        // Calculate total (Balance + Profit)




$transactions = Transaction::with('package')
  ->where('user_id', Auth::id())
  ->get();
$averageProfitPercentage = $transactions->avg(function($transaction) {
  return $transaction->package->profit_percentage;
});
// box2
$totalProfit = Transaction::where('user_id', Auth::id())->sum('total_profit');


$totalEarnings = $totalBalance + $totalWithdrawals;

// Calculate percentages
if ($totalEarnings > 0) {
    $balancePercentage = ($totalBalance / $totalEarnings) * 100;
    $withdrawalsPercentage = ($totalWithdrawals / $totalEarnings) * 100;
    $totalEarningsPercentage = ($totalEarnings / ($totalEarnings + $totalProfit)) * 100;
} else {
    // If totalEarnings is zero, set percentages to zero or any other default value
    $balancePercentage = 0;
    $withdrawalsPercentage = 0;
    $totalEarningsPercentage = 0;
}





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




        return view('user.pages.wallet.index', compact(
            'totalBalance', 'totalProfit', 'totalWithdrawals', 'totalEarnings', 
            'balancePercentage', 'withdrawalsPercentage', 'totalEarningsPercentage' ,'averageProfitPercentage','transactions','transactions', 'selected_balance'
        ));
    }




























    public function userDashboard()
    {
        // Total balance from transactions
        $totalBalance = Transaction::where('user_id', Auth::id())->sum('total_balance');
        
        // Total profit from transactions
        $totalProfit = Transaction::where('user_id', Auth::id())->sum('total_profit');
        
        // Total withdrawals (spending) approved
        $totalWithdrawals = Withdrawal::where('user_id', Auth::id())
            ->where('status', 'approved')  // Only approved withdrawals
            ->sum('withdrawal_amount');
        
        // Calculate total (Balance + Profit)




$transactions = Transaction::with('package')
  ->where('user_id', Auth::id())
  ->get();
$averageProfitPercentage = $transactions->avg(function($transaction) {
  return $transaction->package->profit_percentage;
});
// box2
$totalProfit = Transaction::where('user_id', Auth::id())->sum('total_profit');


$totalEarnings = $totalBalance + $totalWithdrawals;

// Calculate percentages
if ($totalEarnings > 0) {
    $balancePercentage = ($totalBalance / $totalEarnings) * 100;
    $withdrawalsPercentage = ($totalWithdrawals / $totalEarnings) * 100;
    $totalEarningsPercentage = ($totalEarnings / ($totalEarnings + $totalProfit)) * 100;
} else {
    // If totalEarnings is zero, set percentages to zero or any other default value
    $balancePercentage = 0;
    $withdrawalsPercentage = 0;
    $totalEarningsPercentage = 0;
}

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



        
        $total = $totalEarnings + $totalProfit; // Total = Earnings + Profit
        
        $withdrawals = Withdrawal::where('user_id', Auth::id())
        ->where('status', 'approved')  // Only approved withdrawals
        ->get();
        
        // Pass the calculated values to the view
        return view('user.pages.dashboard', compact(
            'totalBalance', 'totalProfit', 'totalWithdrawals', 'totalEarnings', 
            'balancePercentage', 'withdrawalsPercentage', 'totalEarningsPercentage' ,'averageProfitPercentage','transactions','total','withdrawals','transactions', 'selected_balance'
        ));
    }
    





























}
