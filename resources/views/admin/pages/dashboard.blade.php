@extends('admin.layouts.app')
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
                                            <img src="{{ asset('assets/images/icons/total-earn.svg') }}" alt="icon" />
                                        </span>
                                    </div>
                                    <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total Users</span>
                                </div>

                            </div>
                            <div class="flex items-end justify-between">
                                <div class="flex-1">
                                    <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                        {{ number_format($totalUsers) }}
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
                                            {{ number_format($totalUsersThisMonth) }} users

                                        </span>
                                        <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                            this month
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
                                    <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                        Investment</span>
                                </div>

                            </div>
                            <div class="flex items-end justify-between">
                                <div class="flex-1">
                                    <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                        ${{ number_format($totalInvestment, 2) }}
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
                                            ${{ number_format($totalInvestmentThisMonth, 2) }}
                                        </span>
                                        <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                            this month
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
                                    <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                        Transactions</span>
                                </div>

                            </div>
                            <div class="flex items-end justify-between">
                                <div class="flex-1">
                                    <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                        {{ number_format($totalCompletedTransactions) }}
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
                                            {{ number_format($totalCompletedTransactionsThisMonth) }} transactions
                                        </span>
                                        <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                            this month
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

                <!--list table-->
                <div class="w-full rounded-lg bg-white px-[24px] py-[20px] dark:bg-darkblack-600">
                    <div class="flex flex-col space-y-5">

                        <div class="table-content w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th>Details</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="bg-white dark:bg-darkblack-600">

                                            <td class="whitespace-nowrap py-4 text-sm text-gray-500 lg:w-auto">
                                                <div class="flex items-center gap-5">
                                                    <div class="h-[64px] w-[64px]">
                                                        <img class="h-full w-full rounded-lg object-cover"
                                                            src="{{ filter_var($user->avatar, FILTER_VALIDATE_URL) ? $user->avatar : (empty($user->avatar) ? asset('storage/avatar/default.jpg') : asset('storage/avatar/' . $user->avatar)) }}"
                                                            alt="{{ $user->name }}" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h4 class="text-lg font-bold text-bgray-900 dark:text-white">
                                                            {{ $user->name }}</h4>
                                                        <div>
                                                            <span
                                                                class="text-base font-medium text-bgray-700 dark:text-bgray-50">{{ $user->role }}</span>
                                                            <span class="text-gray-500">{{ $user->email }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <span class="text-gray-500">{{ $user->email }}</span>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <span
                                                    class="rounded-lg bg-success-50 px-3 py-1 text-sm font-medium text-success-300 dark:bg-darkblack-500">{{ $user->role }}</span>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <form action="{{ route('user.delete', $user->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-btn">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </section>
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
                        <form action="{{ route('admin.bank.store') }}" method="POST">
                            @csrf <!-- Add CSRF token for security -->

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
                                        class="w-full py-3 px-5 rounded-lg shadow-lg bg-white dark:bg-darkblack-600 text-lg font-semibold text-bgray-900 dark:text-white placeholder:text-bgray-500 focus:outline-none focus:ring-2 focus:ring-red-500 dark:focus:ring-red-500 transition-all duration-300 ease-in-out" />
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-6">
                                <button type="submit"
                                    class="w-full butotn py-3 px-6 rounded-lg bg-gradient-to-r from-red-400 to-red-500 text-white font-semibold hover:from-red-500 hover:to-red-600 transform hover:scale-105 transition-all duration-300 ease-in-out shadow-lg">
                                    Create Account
                                </button>
                            </div>
                        </form>

                    </div>


                </div>

            </section>
        </div>
        <!-- write your code here-->
    </main>
@endsection
