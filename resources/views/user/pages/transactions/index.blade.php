@extends('user.layouts.app')

@section('content')

<main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
  <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
    <div class="col-span-12 2xl:col-span-12">
      <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
       <table class="w-full">
    <thead>
        <tr class="border-b border-bgray-300 dark:border-darkblack-400">
            <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">User Name</span>
            </th>
            <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Transaction Amount</span>
            </th>
            <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Status</span>
            </th>
            <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Transaction ID</span>
            </th>
            <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Payment Receipt</span>
            </th>
            <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Actions</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $transaction)
            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                <td class="px-6 py-5">
                    <p class="text-base font-semibold text-bgray-900 dark:text-white">{{ $transaction->user->name }}</p>
                </td>
                <td class="px-6 py-5">
                    <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">${{ number_format($transaction->transaction_amount, 2) }}</p>
                </td>
                <td class="px-6 py-5">
                    <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">{{ ucfirst($transaction->status) }}</p>
                </td>
                <td class="px-6 py-5">
                    <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">{{ $transaction->transaction_id }}</p>
                </td>
                <td class="px-6 py-5">
                    @if ($transaction->payment_receipt)
                        <a href="{{ asset('storage/' . $transaction->payment_receipt) }}" target="_blank" class="text-blue-500 hover:text-blue-700">View Receipt</a>
                    @else
                        <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">No Receipt</p>
                    @endif
                </td>
                
         <!-- In your transaction table -->
         <td class="px-6 py-5">
            <div class="flex justify-center space-x-4">
                <!-- Edit Button: Display only if the user is an admin or if the transaction belongs to the user -->
                @if (Auth::user()->role === 'admin' || $transaction->user_id === Auth::id())
                    <a href="{{ route(Auth::user()->role === 'admin' ? 'admin.transactions.edit' : 'user.transactions.edit', $transaction->id) }}" class="text-blue-500 hover:text-blue-700 font-semibold px-4 py-2 rounded-lg border border-blue-500 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">Edit</a>
                @endif
        
                <!-- Accept Button: Only visible if the transaction is pending and the user is an admin -->
                @if (Auth::user()->role === 'admin' && $transaction->status == 'pending')
                    <form action="{{ route('admin.transactions.accept', $transaction->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="text-green-500 hover:text-green-700 font-semibold px-4 py-2 rounded-lg border border-green-500 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-500 transition-all">
                            Accept
                        </button>
                    </form>
                @endif
        
                <!-- Delete Button: Only visible if the user is an admin -->
                @if (Auth::user()->role === 'admin')
                    <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?')" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 font-semibold px-4 py-2 rounded-lg border border-red-500 hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all">
                            Delete
                        </button>
                    </form>
                @endif
            </div>
        </td>
        
        

            </tr>
        @endforeach
    </tbody>
</table>

        
      </div>
    </div>
  </div>
</main>

@endsection
