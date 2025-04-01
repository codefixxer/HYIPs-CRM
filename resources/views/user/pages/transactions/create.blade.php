@extends('user.layouts.app')

@section('content')
    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
        <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
            <div class="col-span-12 2xl:col-span-12">
                <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
                    <form
                    action="{{ isset($transaction) ? route(Auth::user()->role === 'admin' ? 'admin.transactions.update' : 'user.transactions.update', $transaction->id) : route(Auth::user()->role === 'admin' ? 'admin.transactions.store' : 'user.transactions.store') }}"
                    method="POST" enctype="multipart/form-data">
                
                        @csrf

                        @if (isset($transaction))
                            @method('PUT')
                        @endif

                        <div class="grid gap-6 md:grid-cols-2">
                            <!-- User -->
                            @if (Auth::user()->role === 'admin')

                            <div>
                                    <label for="user_id" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">User</label>
                                    <select id="user_id" name="user_id"
                                        class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                        required>
                                        <option value="" disabled selected>Select a User</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ isset($transaction) && $transaction->user_id == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            
                            @endif



                            <div>
                                <label for="bank_id" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Select Bank Account</label>
                                <select id="bank_id" name="bank_id" class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white" required>
                                    <option value="" disabled selected>Select a Bank Account</option>
                                    @foreach ($banks as $bank)
                                        <option value="{{ $bank->id }}" {{ isset($transaction) && $transaction->bank_id == $bank->id ? 'selected' : '' }}>
                                            {{ $bank->bank_name }} - {{ $bank->account_number }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Select Package -->
                            <div>
                                <label for="package_id"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Select
                                    Product</label>
                                <select id="package_id" name="package_id"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    required>
                                    <option value="" disabled selected>Select a Package</option>
                                    @foreach ($packages as $package)
                                        <option value="{{ $package->id }}"
                                            {{ isset($transaction) && $transaction->package_id == $package->id ? 'selected' : '' }}>
                                            {{ $package->package_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Profit Percentage (Auto-filled) -->
                            <div>
                                <label for="profit_percentage"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Profit in
                                    %</label>
                                <input type="text" id="profit_percentage" name="profit_percentage"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    readonly value="{{ isset($transaction) ? $transaction->profit : '' }}" />
                            </div>

                            <!-- Product Price (Auto-filled) -->
                            <div>
                                <label for="transaction_amount"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Product
                                    Price</label>
                                <input type="text" id="transaction_amount" name="transaction_amount"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    readonly value="{{ isset($transaction) ? $transaction->transaction_amount : '' }}" />
                            </div>

                            <!-- Transaction ID -->
                            <div>
                                <label for="transaction_id"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Transaction
                                    ID</label>
                                <input type="text" id="transaction_id" name="transaction_id"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                                    value="{{ isset($transaction) ? $transaction->transaction_id : old('transaction_id') }}"
                                    required />
                            </div>

                            <!-- Payment Receipt -->
                            <div>
                                <label for="payment_receipt"
                                    class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Payment
                                    Receipt</label>
                                <input type="file" id="payment_receipt" name="payment_receipt"
                                    class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white" />
                                @if (isset($transaction) && $transaction->payment_receipt)
                                    <p class="mt-2">Current File: <a
                                            href="{{ asset('storage/' . $transaction->payment_receipt) }}" target="_blank"
                                            class="text-blue-500">View Receipt</a></p>
                                @endif
                            </div>

                        </div>

                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="rounded-lg bg-success-300 px-12 py-3.5 font-semibold text-white transition-all hover:bg-success-400">
                                {{ isset($transaction) ? 'Update Transaction' : 'Save Transaction' }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('package_id').addEventListener('change', function() {
            var packageId = this.value;

            // If package_id is changed, fetch the new package data
            fetch(`/admin/get-package-details/${packageId}`)
                .then(response => response.json())
                .then(data => {
                    // Auto-fill the profit percentage and transaction amount fields based on the package data
                    document.getElementById('profit_percentage').value = data.profit_percentage;
                    document.getElementById('transaction_amount').value = data.investment_amount;
                })
                .catch(error => console.error('Error fetching package data:', error));
        });
    </script>
@endsection
