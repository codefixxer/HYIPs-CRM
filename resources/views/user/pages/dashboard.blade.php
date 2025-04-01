@extends('user.layouts.app')
@section('content')
    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-12 xl:pb-12">
        <!-- write your code here-->
        <div class="2xl:flex 2xl:space-x-[48px]">
            <section class="mb-6 2xl:mb-0 2xl:flex-1">
                <!-- total widget-->
                <div class="mb-[24px] w-full">
                    <div class="grid grid-cols-1 gap-[24px] lg:grid-cols-3">



                        <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                            <div class="mb-5 flex items-center justify-between">
                                <div class="flex items-center space-x-[7px]">
                                    <div class="icon">
                                        <span>
                                            <img src="{{ asset('assets/images/icons/total-earn.svg') }}"
                                                alt="Total earnings" />

                                        </span>
                                    </div>
                                    <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total Balance</span>
                                </div>
                                {{-- <div>
                                <img src="{{ asset('assets/images/avatar/members-2.png') }}" alt="members" />
                            </div> --}}
                            </div>
                            <div class="flex items-end justify-between">
                                <div class="flex-1">
                                    <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                        ${{ number_format($totalBalance, 2) }}
                                    </p>
                                    <div class="flex items-center space-x-1">
                                        <span>
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                    fill="#22C55E" />
                                                <path opacity="0.4"
                                                    d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                    fill="#22C55E" />
                                            </svg>
                                        </span>
                                        <span class="text-sm font-medium text-success-300">
                                            + {{ number_format($averageProfitPercentage, 2) }}%
                                        </span>
                                        <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                            Daily Basis
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[106px]">
                                    <canvas id="totalEarn" height="68"></canvas>
                                </div>
                            </div>
                        </div>







                        <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                            <div class="mb-5 flex items-center justify-between">
                                <div class="flex items-center space-x-[7px]">
                                    <div class="icon">
                                        <span>
                                            <img src="{{ asset('assets/images/icons/total-earn.svg') }}" alt="icon" />
                                        </span>
                                    </div>
                                    <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total Profit</span>
                                </div>

                            </div>
                            <div class="flex items-end justify-between">
                                <div class="flex-1">
                                    <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                        ${{ number_format($totalProfit, 2) }}
                                    </p>
                                    <div class="flex items-center space-x-1">
                                        <span>
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                    fill="#22C55E" />
                                                <path opacity="0.4"
                                                    d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                    fill="#22C55E" />
                                            </svg>
                                        </span>
                                        <span class="text-sm font-medium text-success-300">
                                            + 3.5%
                                        </span>
                                        <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                            Daily Basis
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[106px]">
                                    <canvas id="totalSpending" height="68"></canvas>
                                </div>
                            </div>
                        </div>





















                        <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                            <div class="mb-5 flex items-center justify-between">
                                <div class="flex items-center space-x-[7px]">
                                    <div class="icon">
                                        <span>
                                            <img src="{{ asset('assets/images/icons/total-earn.svg') }}" alt="icon" />
                                        </span>
                                    </div>
                                    <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total Withdrawals
                                        Goal</span>
                                </div>
                            </div>
                            <div class="flex items-end justify-between">
                                <div class="flex-1">
                                    <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                        ${{ number_format($totalWithdrawals, 2) }}
                                    </p>
                                    <div class="flex items-center space-x-1">
                                        <span>
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                    fill="#22C55E" />
                                                <path opacity="0.4"
                                                    d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                    fill="#22C55E" />
                                            </svg>
                                        </span>
                                        <span class="text-sm font-medium text-success-300">
                                            + 3.5%
                                        </span>
                                        <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                            Daily Baisi
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[106px]">
                                    <canvas id="totalGoal" height="68"></canvas>
                                </div>
                            </div>
                        </div>












                    </div>
                </div>





                <!-- revenue, flow -->
                <div class="mb-[24px] w-full xl:w-[50%] xl:flex xl:space-x-[24px]">
                    <!-- Main Container with 50% Width -->
                    <div class="w-[50%] xl:w-[50%]">

                        <canvas id="revenueFlow" height="255" style="display: none;"></canvas>

                        <div class="flex-1 xl:block">
                            <div class="rounded-lg bg-white dark:bg-darkblack-600 xl:w-[50%]">
                                <div
                                    class="flex items-center justify-between border-b border-bgray-300 px-[20px] py-[12px] dark:border-darkblack-400">
                                    <h3 class="text-xl font-bold text-bgray-900 dark:text-white">Efficiency</h3>
                                </div>
                                <div class="px-[20px] py-[12px]">
                                    <!-- Circular Graph -->
                                    <div class="mb-4 flex items-center space-x-8">
                                        <div class="relative w-[180px]">
                                            <canvas id="pie_chart" height="128"></canvas>
                                            <div class="absolute z-0 h-[34px] w-[34px] rounded-full bg-[#EDF2F7]"
                                                style="left: calc(50% - 17px); top: calc(50% - 17px);"></div>
                                        </div>
                                        <div class="counting">
                                            <!-- Profit -->
                                            <div class="mb-6">
                                                <div class="flex items-center space-x-[2px]">
                                                    <p class="text-lg font-bold text-success-300">
                                                        ${{ number_format($totalProfit, 2) }}</p>
                                                </div>
                                                <p class="text-base font-medium text-bgray-600">Profit</p>
                                            </div>

                                            <!-- Balance -->
                                            <div>
                                                <div class="flex items-center space-x-[2px]">
                                                    <p class="text-lg font-bold text-bgray-900 dark:text-white">
                                                        ${{ number_format($totalBalance, 2) }}</p>
                                                </div>
                                                <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">Balance
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Breakdown Section -->
                                    <div class="status">
                                        <!-- Total Earnings (Balance + Withdrawals) -->
                                        <div class="mb-1.5 flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div class="h-2.5 w-2.5 rounded-full bg-success-300"></div>
                                                <span class="text-sm font-medium text-bgray-600 dark:text-bgray-50">Total
                                                    Earnings (Balance + Withdrawals)</span>
                                            </div>
                                            <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                                {{ number_format($totalEarningsPercentage, 2) }}%</p>
                                        </div>

                                        <!-- Balance -->
                                        <div class="mb-1.5 flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div class="h-2.5 w-2.5 rounded-full bg-warning-300"></div>
                                                <span
                                                    class="text-sm font-medium text-bgray-600 dark:text-white">Balance</span>
                                            </div>
                                            <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                                {{ number_format($balancePercentage, 2) }}%</p>
                                        </div>

                                        <!-- Withdrawals -->
                                        <div class="mb-1.5 flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div class="h-2.5 w-2.5 rounded-full bg-bgray-200"></div>
                                                <span
                                                    class="text-sm font-medium text-bgray-600 dark:text-white">Withdrawals</span>
                                            </div>
                                            <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                                {{ number_format($withdrawalsPercentage, 2) }}%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        // Pie chart for the dynamic display
                        const ctx = document.getElementById('pie_chart').getContext('2d');
                        new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Profit', 'Balance', 'Withdrawals'],
                                datasets: [{
                                    data: [{{ $totalProfit }}, {{ $totalBalance }}, {{ $totalWithdrawals }}],
                                    backgroundColor: ['#22C55E', '#F59E0B', '#D1D5DB'],
                                }]
                            },
                        });
                    </script>





















                    <div class="w-[75%] xl:w-full rounded-lg bg-white px-[24px] py-[20px] dark:bg-darkblack-600">
                        <div class="flex flex-col space-y-5 w-full xl:w-full">


                            <div class="table-content w-full overflow-x-auto">
                                <div
                                    class="flex items-center justify-between border-b border-bgray-300 px-[20px] py-[12px] dark:border-darkblack-400">
                                    <h3 class="text-xl font-bold text-bgray-900 dark:text-white">Withdrawals</h3>
                                </div>
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                            <th class="inline-block w-[250px] px-6 py-5 lg:w-auto xl:px-0">
                                                <div class="flex w-full items-center space-x-2.5">
                                                    <span
                                                        class="text-base font-medium text-bgray-600 dark:text-bgray-50">Amount</span>

                                                </div>
                                            </th>
                                            <th class="px-6 py-5 xl:px-0">
                                                <div class="flex items-center space-x-2.5">
                                                    <span
                                                        class="text-base font-medium text-bgray-600 dark:text-bgray-50">Withdrawal
                                                        Date</span>

                                                </div>
                                            </th>
                                            <th class="w-[165px] px-6 py-5 xl:px-0">
                                                <div class="flex w-full items-center space-x-2.5">
                                                    <span
                                                        class="text-base font-medium text-bgray-600 dark:text-bgray-50">Status</span>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdrawals as $withdrawal)
                                            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                                <td class="px-6 py-5 xl:px-0">
                                                    <div class="flex w-full items-center space-x-2.5">

                                                        <p class="text-base font-medium text-bgray-900 dark:text-white">
                                                            ${{ number_format($withdrawal->withdrawal_amount, 2) }}</p>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-5 xl:px-0">

                                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                                        {{ \Carbon\Carbon::parse($withdrawal->created_at)->format('M d, Y') }}
                                                    </p>
                                                </td>
                                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                                    <p class="text-base font-semibold text-bgray-900 dark:text-bgray-50">
                                                        {{ ucfirst($withdrawal->status) }}
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>

                </div>















                <!--list table-->

            </section>

        </div>
        <!-- write your code here-->










        <div class="flex items-center justify-between border-b border-bgray-300 px-[20px] py-[12px] dark:border-darkblack-400">
            <h3 class="text-xl font-bold text-bgray-900 dark:text-white">Withdraw Now!</h3>
        </div>
        <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
            <div class="col-span-12 2xl:col-span-12">
                <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
                    <!-- Form Action based on whether it's Create or Edit -->








                    <form
                        action="{{ Auth::user()->role === 'admin' ? (isset($withdrawal) ? route('admin.withdrawals.update', $withdrawal->id) : route('admin.withdrawals.store')) : (isset($withdrawal) ? route('user.withdrawals.update', $withdrawal->id) : route('user.withdrawals.store')) }}"
                        method="POST">
                        @csrf
                        @if (isset($withdrawal))
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $withdrawal->id }}">
                        @endif

                        <div class="grid gap-6 md:grid-cols-2">


                            <div>
                                <label for="trans_id"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Select
                                    Transaction for Withdrawal</label>
                                <select id="trans_id" name="trans_id"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    required>
                                    <option value="" disabled selected>Select a Transaction</option>
                                    @foreach ($transactions as $transaction)
                                        <option value="{{ $transaction->id }}"
                                            {{ old('trans_id', isset($withdrawal) ? $withdrawal->trans_id : '') == $transaction->id ? 'selected' : '' }}
                                            data-balance="{{ $transaction->total_balance }}">
                                            {{ $transaction->package->package_name }} | Balance:
                                            ${{ number_format($transaction->total_balance, 2) }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>


                            <!-- Withdrawal Amount -->
                            <div>
                                <label for="withdrawal_amount"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Withdrawal
                                    Amount</label>
                                <input type="number" id="withdrawal_amount" name="withdrawal_amount"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    value="{{ old('withdrawal_amount', $withdrawal->withdrawal_amount ?? '') }}"
                                    min="0.01" step="0.01" pattern="^\d*(\.\d{1,2})?$" placeholder="Enter amount" />
                                <small class="text-gray-500">Available balance for withdrawal: $<span
                                        id="available_balance">{{ $selected_balance }}</span></small>
                            </div>

                            <!-- Account Number -->
                            <div>
                                <label for="account_number"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Account
                                    Number</label>
                                <input type="text" id="account_number" name="account_number"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    value="{{ old('account_number', $withdrawal->account_number ?? '') }}" required />
                            </div>

                            <!-- Status -->
                            {{-- <div>
                                <label for="status" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Status</label>
                                <select
                                    id="status"
                                    name="status"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    required
                                >
                                    <option value="pending" {{ old('status', $withdrawal->status ?? '') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ old('status', $withdrawal->status ?? '') == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ old('status', $withdrawal->status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div> --}}

                            <!-- Admin Note -->
                            <div>
                                <label for="admin_note"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Admin
                                    Note</label>
                                <textarea id="admin_note" name="admin_note"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    rows="4">{{ old('admin_note', $withdrawal->admin_note ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="rounded-lg bg-success-300 px-12 py-3.5 font-semibold text-white transition-all hover:bg-success-400">
                                {{ isset($withdrawal) ? 'Update Withdrawal Request' : 'Save Withdrawal Request' }}
                            </button>
                        </div>
                    </form>

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const transSelect = document.getElementById("trans_id");
                            const withdrawalAmountInput = document.getElementById("withdrawal_amount");
                            const availableBalanceText = document.getElementById("available_balance");

                            // Update available balance based on selected transaction
                            transSelect.addEventListener("change", function() {
                                const selectedOption = transSelect.options[transSelect.selectedIndex];
                                const balance = selectedOption.getAttribute("data-balance");

                                // Update the available balance text
                                availableBalanceText.textContent = parseFloat(balance).toFixed(2);

                                // Optionally update the withdrawal amount field with the balance
                                withdrawalAmountInput.max = balance;
                            });
                        });
                    </script>


                    <script>
                        document.getElementById('trans_id').addEventListener('change', function() {
                            var selectedOption = this.options[this.selectedIndex];
                            var balance = selectedOption.getAttribute('data-balance');

                            // Display the available balance in the withdrawal field
                            document.getElementById('available_balance').textContent = balance;

                            // Set the maximum withdrawal amount to the available balance
                            var withdrawalAmountField = document.getElementById('withdrawal_amount');
                            withdrawalAmountField.setAttribute('max', balance);

                            // Ensure the withdrawal amount doesn't exceed the available balance
                            if (parseFloat(withdrawalAmountField.value) > parseFloat(balance)) {
                                withdrawalAmountField.value = balance; // Reset the value if it's more than the balance
                            }

                            // Ensure the withdrawal amount is greater than 0 and handle edge cases
                            if (parseFloat(withdrawalAmountField.value) <= 0) {
                                withdrawalAmountField.value = 0.01; // Reset to 0.01 if it's 0 or less
                            }
                        });
                    </script>












                </div>
            </div>
        </div>
    </main>
@endsection
