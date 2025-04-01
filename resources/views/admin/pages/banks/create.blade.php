@extends('admin.layouts.app')

@section('content')
    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
        <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
            <div class="col-span-12 2xl:col-span-12">
                <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
                    <style>
                        /* Base Styling */
                        body {
                            font-family: 'Arial', sans-serif;
                            background-color: #1a202c;
                            /* Dark background for the page */
                            color: #f7fafc;
                            /* Light text color */
                        }
        
                        /* Bank Details Section */
                        .w-full {
                            width: 100%;
                        }
        
                        .mb-6 {
                            margin-bottom: 1.5rem;
                        }
        
                        .text-bgray-900 {
                            color: #2d3748;
                        }
        
                        .text-bgray-600 {
                            color: #4a5568;
                        }
        
                        .text-sm {
                            font-size: 0.875rem;
                        }
        
                        .text-lg {
                            font-size: 1.125rem;
                        }
        
                        .text-white {
                            color: white;
                        }
        
                        .dark\:text-white {
                            color: white;
                        }
        
                        .dark\:text-bgray-50 {
                            color: #edf2f7;
                        }
        
                        /* Input Fields */
                        input[type="text"] {
                            width: 100%;
                            padding: 0.75rem 1.25rem;
                            border-radius: 0.75rem;
                            background-color: #ffffff;
                            font-size: 1.125rem;
                            font-weight: 600;
                            color: #2d3748;
                            border: 1px solid #e2e8f0;
                            transition: all 0.3s ease-in-out;
                        }
        
                        input[type="text"]::placeholder {
                            color: #718096;
                        }
        
                        input[type="text"]:focus {
                            outline: none;
                            border-color: #f56565;
                            /* Red border when focused */
                            box-shadow: 0 0 0 2px rgba(255, 99, 71, 0.3);
                            /* Soft shadow for focus effect */
                        }
        
                        input[type="text"]:focus::placeholder {
                            color: #f56565;
                            /* Red color for placeholder when focused */
                        }
        
                        /* Submit Button */
                        .button {
                            width: 100%;
                            padding: 1rem 1.5rem;
                            border-radius: 0.75rem;
                            background: linear-gradient(to right, #f56565, #e53e3e);
                            font-size: 1.125rem;
                            font-weight: 600;
                            color: white;
                            text-align: center;
                            border: none;
                            cursor: pointer;
                            transition: all 0.3s ease-in-out;
                            box-shadow: 0 4px 8px rgba(255, 99, 71, 0.3);
                            background: linear-gradient(to right, #f56565, #e53e3e) !important;
        
                        }
        
                        .button:hover {
                            background: linear-gradient(to right, #e53e3e, #c53030);
                            /* Darker red on hover */
                            transform: scale(1.05);
                        }
        
                        .button:focus {
                            outline: none;
                            box-shadow: 0 0 0 2px rgba(255, 99, 71, 0.6);
                            /* Focus ring with red */
                        }
        
                        /* Responsive Design for Small Devices */
                        @media (max-width: 640px) {
                            .text-lg {
                                font-size: 1rem;
                                /* Adjust text size on small devices */
                            }
        
                            .text-sm {
                                font-size: 0.75rem;
                                /* Adjust text size on small devices */
                            }
        
                            .mb-6 {
                                margin-bottom: 1.25rem;
                            }
                        }
                    </style>
                    <section
                        class="flex w-full flex-col space-x-0 lg:flex-row lg:space-x-6 2xl:w-[400px] 2xl:flex-col 2xl:space-x-0">
                        <div
                            class="mb-6 w-full rounded-lg bg-white px-[42px] py-5 dark:border dark:border-darkblack-400 dark:bg-darkblack-600 lg:mb-0 lg:w-1/2 2xl:mb-6 2xl:w-full">
                            <div class="my-wallet mb-8 w-full">
                                <div class="mb-3 flex items-center justify-between">
                                    <h3 class="text-lg font-bold text-bgray-900 dark:text-white">
                                        Create Bank Account
                                    </h3>
        
                                </div>
                                <div class="flex justify-center">
                                    <div class="card-slider relative w-[280px] md:w-[340px]">
                                        <div class="w-full">
                                            <img src="{{ asset('assets/images/payments/card-1.svg') }}" alt="card" />
                                        </div>
                                        <div class="w-full">
                                            <img src="{{ asset('assets/images/payments/card-2.svg') }}" alt="card" />
                                        </div>
                                        <div class="w-full">
                                            <img src="{{ asset('assets/images/payments/card-3.svg') }}" alt="card" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <form action="{{ isset($bank) ? route('admin.bank.update', $bank->id) : route('admin.bank.store') }}" method="POST">
                                    @csrf
                                    @if(isset($bank))
                                        @method('PUT') <!-- Use PUT method for update -->
                                    @endif
                                    
                                    <h3 class="mb-6 text-2xl font-bold text-bgray-900 dark:text-white">
                                        Bank Details
                                    </h3>
                                
                                    <!-- Bank Name Input -->
                                    <div class="flex flex-col mb-6">
                                        <p class="text-sm font-medium text-bgray-600 dark:text-bgray-50 mb-2">
                                            Write Bank Name
                                        </p>
                                        <div class="relative">
                                            <input type="text" name="bank_name" placeholder="Enter bank name"
                                                value="{{ old('bank_name', $bank->bank_name ?? '') }}" 
                                                class="w-full py-3 px-5 rounded-lg shadow-lg bg-white dark:bg-darkblack-600 text-lg font-semibold text-bgray-900 dark:text-white placeholder:text-bgray-500 focus:outline-none focus:ring-2 focus:ring-red-500 dark:focus:ring-red-500 transition-all duration-300 ease-in-out" />
                                        </div>
                                    </div>
                                
                                    <!-- Account Number Input -->
                                    <div class="flex flex-col mb-6">
                                        <p class="text-sm font-medium text-bgray-600 dark:text-bgray-50 mb-2">
                                            Enter Account Number
                                        </p>
                                        <div class="relative">
                                            <input type="text" name="account_number" placeholder="Enter account number"
                                                value="{{ old('account_number', $bank->account_number ?? '') }}" 
                                                class="w-full py-3 px-5 rounded-lg shadow-lg bg-white dark:bg-darkblack-600 text-lg font-semibold text-bgray-900 dark:text-white placeholder:text-bgray-500 focus:outline-none focus:ring-2 focus:ring-red-500 dark:focus:ring-red-500 transition-all duration-300 ease-in-out" />
                                        </div>
                                    </div>
                                
                                    <!-- Submit Button -->
                                    <div class="mt-6">
                                        <button type="submit"
                                            class="w-full py-3 px-6 rounded-lg bg-gradient-to-r from-red-400 to-red-500 text-white font-semibold hover:from-red-500 hover:to-red-600 transform hover:scale-105 transition-all duration-300 ease-in-out shadow-lg">
                                            {{ isset($bank) ? 'Update Account' : 'Create Account' }}
                                        </button>
                                    </div>
                                </form>
                                
                                
        
                            </div>
        
        
                        </div>
        
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
