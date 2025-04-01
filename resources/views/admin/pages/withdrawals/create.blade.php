@extends('admin.layouts.app')

@section('content')
    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
        <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
            <div class="col-span-12 2xl:col-span-12">
                <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
                    <!-- Form Action based on whether it's Create or Edit -->








                    <form action="{{ isset($withdrawal) ? route('admin.withdrawals.update', $withdrawal->id) : route('admin.withdrawals.store') }}" method="POST">
                        @csrf
                        @if(isset($withdrawal))
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $withdrawal->id }}">
                        @endif
                    
                        <div class="grid gap-6 md:grid-cols-2">
                            <!-- User -->
                            <div>
                                <label for="user_id" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">User</label>
                                <select
                                    id="user_id"
                                    name="user_id"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    required
                                >
                                    <option value="" disabled {{ old('user_id', $withdrawal->user_id ?? '') ? '' : 'selected' }}>Select a User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ old('user_id', $withdrawal->user_id ?? '') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <!-- Transaction Dropdown -->
                            <div>
                                <label for="trans_id" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Select Transaction for Withdrawal</label>
                                <select id="trans_id" name="trans_id" class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white" required>
                                    <option value="" disabled selected>Select a Transaction</option>
                                    @foreach ($transactions as $transaction)
                                        <option value="{{ $transaction->id }}"
                                            {{ old('trans_id', isset($withdrawal) ? $withdrawal->trans_id : '') == $transaction->id ? 'selected' : '' }}
                                            data-balance="{{ $transaction->total_balance }}">
                                            {{ $transaction->package->package_name }} | Balance: ${{ number_format($transaction->total_balance, 2) }}
                                        </option>
                                    @endforeach
                                </select>
                                      
                            </div>
                            
                    
                            <!-- Withdrawal Amount -->
                            <div>
                                <label for="withdrawal_amount" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Withdrawal Amount</label>
                                <input
                                    type="number"
                                    id="withdrawal_amount"
                                    name="withdrawal_amount"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    value="{{ old('withdrawal_amount', $withdrawal->withdrawal_amount ?? '') }}"
                                    min="0.01"
                                    step="0.01"
                                    pattern="^\d*(\.\d{1,2})?$"
                                    placeholder="Enter amount"
                                />
                                <small class="text-gray-500">Available balance for withdrawal: $<span id="available_balance">{{ $selected_balance }}</span></small>
                            </div>
                    
                            <!-- Account Number -->
                            <div>
                                <label for="account_number" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Account Number</label>
                                <input
                                    type="text"
                                    id="account_number"
                                    name="account_number"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    value="{{ old('account_number', $withdrawal->account_number ?? '') }}"
                                    required
                                />
                            </div>
                    
                            <!-- Status -->
                            <div>
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
                            </div>
                    
                            <!-- Admin Note -->
                            <div>
                                <label for="admin_note" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Admin Note</label>
                                <textarea
                                    id="admin_note"
                                    name="admin_note"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    rows="4"
                                >{{ old('admin_note', $withdrawal->admin_note ?? '') }}</textarea>
                            </div>
                        </div>
                    
                        <div class="flex justify-end">
                            <button
                                type="submit"
                                class="rounded-lg bg-success-300 px-12 py-3.5 font-semibold text-white transition-all hover:bg-success-400"
                            >
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
                      document.getElementById('trans_id').addEventListener('change', function () {
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
        withdrawalAmountField.value = 0.01;  // Reset to 0.01 if it's 0 or less
    }
});


                    </script>
                       











                </div>
            </div>
        </div>
    </main>
@endsection
