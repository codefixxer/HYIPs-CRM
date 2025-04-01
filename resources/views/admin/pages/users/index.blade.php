@extends('admin.layouts.app')
@section('content')
<style>
    /* Style for the delete button */
.delete-btn {
    background-color: #e53e3e; /* Red background */
    color: white; /* White text */
    padding: 8px 24px; /* Padding for the button */
    font-size: 14px; /* Text size */
    font-weight: 600; /* Make text bold */
    border-radius: 12px; /* Rounded corners */
    transition: background-color 0.3s ease; /* Smooth background color transition */
    text-align: center; /* Align text in the middle */
    cursor: pointer; /* Change cursor to pointer */
    border: none; /* Remove default border */
}

.delete-btn:hover {
    background-color: #c53030; /* Darker red on hover */
}

/* Optional: Add focus styles to make it more accessible */
.delete-btn:focus {
    outline: 2px solid #e53e3e;
    outline-offset: 2px;
}

</style>


<main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
        <!-- write your code here-->
        <div class="flex flex-col space-y-20 2xl:flex-row 2xl:space-x-11">
            <div class="w-full 2xl:flex-1">
                <div class="mb-8 flex items-center rounded-lg bg-white p-4 dark:bg-darkblack-600">
                    <div class="flex flex-1 items-center border-bgray-400 pl-4 dark:border-darkblack-400 xl:border-r">
                        <span class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                    stroke="#94A3B8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21 21L17 17" stroke="#94A3B8" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <input type="text"
                            class="w-full border-0 focus:border-none focus:outline-none focus:ring-0 dark:bg-darkblack-600 dark:text-white"
                            placeholder="Job Title, Company, or Keywords " />
                    </div>
                    <div class="relative">
                        <div onclick="dateFilterAction('#locationSelect')"
                            class="hidden items-center border-r border-bgray-400 pl-9 dark:border-darkblack-400 xl:flex">
                            <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.9092 10.448C19.9092 16.4935 11.9092 21.6753 11.9092 21.6753C11.9092 21.6753 3.90918 16.4935 3.90918 10.448C3.90918 8.38656 4.75203 6.40954 6.25233 4.95187C7.75262 3.4942 9.78745 2.67529 11.9092 2.67529C14.0309 2.67529 16.0657 3.4942 17.566 4.95187C19.0663 6.40954 19.9092 8.38656 19.9092 10.448Z"
                                        stroke="#94A3B8" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12 12.6753C13.3807 12.6753 14.5 11.556 14.5 10.1753C14.5 8.79458 13.3807 7.67529 12 7.67529C10.6193 7.67529 9.5 8.79458 9.5 10.1753C9.5 11.556 10.6193 12.6753 12 12.6753Z"
                                        stroke="#94A3B8" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <input type="text"
                                class="border-0 focus:border-none focus:outline-none focus:ring-0 dark:bg-darkblack-600"
                                placeholder="Select Location " />
                            <span class="pr-10"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="#94A3B8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        <div id="locationSelect"
                            class="absolute right-0 top-full z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                            <ul>
                                <li onclick="dateFilterAction('#locationSelect')"
                                    class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-bgray-50 hover:dark:bg-darkblack-600">
                                    Bangladesh
                                </li>
                                <li onclick="dateFilterAction('#locationSelect')"
                                    class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-bgray-50 hover:dark:bg-darkblack-600">
                                    America
                                </li>
                                <li onclick="dateFilterAction('#locationSelect')"
                                    class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-bgray-50 hover:dark:bg-darkblack-600">
                                    Thailand
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="hidden pl-8 md:block">
                        <button>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.49999 1H14.5C14.644 1.05051 14.7745 1.13331 14.8816 1.24206C14.9887 1.35082 15.0695 1.48264 15.1177 1.62742C15.166 1.77221 15.1805 1.92612 15.1601 2.07737C15.1396 2.22861 15.0849 2.37318 15 2.5L9.99998 8V15L5.99999 12V8L0.999985 2.5C0.915076 2.37318 0.860321 2.22861 0.839913 2.07737C0.819506 1.92612 0.833987 1.77221 0.882249 1.62742C0.930511 1.48264 1.01127 1.35082 1.11835 1.24206C1.22542 1.13331 1.35597 1.05051 1.49999 1Z"
                                    stroke="#94A3B8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden pl-10 md:block">
                        <button
                            class="rounded-lg bg-bgray-600 px-10 py-3 text-sm font-medium text-white dark:bg-darkblack-500">
                            Search
                        </button>
                    </div>
                </div>
                <div class="w-full overflow-x-scroll">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Details</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr class="bg-white dark:bg-darkblack-600">
                                    <td class="whitespace-nowrap p-4 text-sm font-medium">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0001 17.75L5.82808 20.995L7.00708 14.122L2.00708 9.25495L8.90708 8.25495L11.9931 2.00195L15.0791 8.25495L21.9791 9.25495L16.9791 14.122L18.1581 20.995L12.0001 17.75Z" fill="#F6A723" stroke="#F6A723" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </td>
                                    <td class="whitespace-nowrap py-4 text-sm text-gray-500 lg:w-auto">
                                        <div class="flex items-center gap-5">
                                            <div class="h-[64px] w-[64px]">
                                                <img class="h-full w-full rounded-lg object-cover" 
                                                     src="{{ filter_var($user->avatar, FILTER_VALIDATE_URL) ? $user->avatar : (empty($user->avatar) ? asset('storage/avatar/default.jpg') : asset('storage/avatar/' . $user->avatar)) }}" 
                                                     alt="{{ $user->name }}" />
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="text-lg font-bold text-bgray-900 dark:text-white">{{ $user->name }}</h4>
                                                <div>
                                                    <span class="text-base font-medium text-bgray-700 dark:text-bgray-50">{{ $user->role }}</span>
                                                    <span class="text-gray-500">{{ $user->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <span class="text-gray-500">{{ $user->email }}</span>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <span class="rounded-lg bg-success-50 px-3 py-1 text-sm font-medium text-success-300 dark:bg-darkblack-500">{{ $user->role }}</span>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <form action="{{ route('user.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
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
        <!-- write your code here-->
    </main>
   @endsection