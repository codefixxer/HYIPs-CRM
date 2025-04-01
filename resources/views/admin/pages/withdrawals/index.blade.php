@extends('admin.layouts.app')

@section('content')

<main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
  <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
    <div class="col-span-12 2xl:col-span-12">
      <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
        <table class="table w-full">
          <thead>
            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">User Name</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Amount</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Account Number</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Status</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Requested At</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Actions</span>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($withdrawals as $withdrawal)
                <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                    <td class="px-6 py-5">
                        <p class="text-base font-semibold text-bgray-900 dark:text-white">{{ $withdrawal->user->name }}</p>
                    </td>
                    <td class="px-6 py-5">
                        <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">${{ number_format($withdrawal->withdrawal_amount, 2) }}</p>
                    </td>
                    <td class="px-6 py-5">
                        <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">{{ $withdrawal->account_number }}</p>
                    </td>
                    <td class="px-6 py-5">
                        <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">{{ ucfirst($withdrawal->status) }}</p>
                    </td>
                    <td class="px-6 py-5">
                        <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">{{ $withdrawal->requested_at }}</p>
                    </td>
                    <td class="px-6 py-5">
                        <div class="flex justify-center space-x-4">
                            <!-- Edit Button -->
                            <a href="{{ route('admin.withdrawals.edit', $withdrawal->id) }}" class="text-blue-500 hover:text-blue-700 font-semibold px-4 py-2 rounded-lg border border-blue-500 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                                Edit
                            </a>
        
                            <!-- Delete Button -->
                            <form action="{{ route('admin.withdrawals.destroy', $withdrawal->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this withdrawal?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-semibold px-4 py-2 rounded-lg border border-red-500 hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all">
                                    Delete
                                </button>
                            </form>
        
                            <!-- Approve Button -->
                            @if($withdrawal->status == 'pending') <!-- Only show approve button if the status is pending -->
                                <form action="{{ route('admin.withdrawals.approve', $withdrawal->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="text-green-500 hover:text-green-700 font-semibold px-4 py-2 rounded-lg border border-green-500 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-500 transition-all">
                                        Approve
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
