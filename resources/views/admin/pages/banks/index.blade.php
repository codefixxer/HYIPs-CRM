<!-- resources/views/admin/pages/banks/index.blade.php -->
@extends('admin.layouts.app')

@section('content')

<style>
    /* Edit Button */
.btn-edit {
    color: #3b82f6; /* Blue color */
    border: 1px solid #3b82f6;
    background-color: transparent;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.btn-edit:hover {
    color: #1d4ed8; /* Darker blue color */
    border-color: #1d4ed8;
    background-color: #eff6ff; /* Light blue background */
}

/* Delete Button */
.btn-delete {
    color: #ef4444; /* Red color */
    border: 1px solid #ef4444;
    background-color: transparent;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.btn-delete:hover {
    color: #dc2626; /* Darker red color */
    border-color: #dc2626;
    background-color: #fee2e2; /* Light red background */
}

/* Activate/Deactivate Button */
.btn-activate {
    color: #10b981; /* Green color */
    border: 1px solid #10b981;
    background-color: transparent;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.btn-activate:hover {
    color: #047857; /* Darker green color */
    border-color: #047857;
    background-color: #d1fae5; /* Light green background */
}

/* For Deactivate (when bank status is inactive) */
.btn-deactivate {
    color: #f59e0b; /* Orange color for deactivate */
    border: 1px solid #f59e0b;
    background-color: transparent;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.btn-deactivate:hover {
    color: #b45309; /* Darker orange color */
    border-color: #b45309;
    background-color: #ffedd5; /* Light orange background */
}

</style>

<main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
  <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
    <div class="col-span-12 2xl:col-span-12">
      <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
        <table class="w-full">
          <thead>
            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Bank Name</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Account Number</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Status</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Created At</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Actions</span>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($banks as $bank)
              <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                <td class="px-6 py-5">
                  <span class="text-base font-medium text-bgray-900 dark:text-white">{{ $bank->bank_name }}</span>
                </td>
                <td class="px-6 py-5">
                  <span class="text-base font-medium text-bgray-900 dark:text-white">{{ $bank->account_number }}</span>
                </td>
                <td class="px-6 py-5">
                  <span class="text-base font-medium text-bgray-900 dark:text-white">{{ ucfirst($bank->status) }}</span>
                </td>
                <td class="px-6 py-5">
                  <span class="text-base font-medium text-bgray-900 dark:text-white">{{ $bank->created_at->format('M d, Y') }}</span>
                </td>
                <td class="px-6 py-5">
                    <!-- Edit Button -->
                    <a href="{{ route('admin.bank.edit', $bank->id) }}" class="text-blue-500 hover:text-blue-700 font-semibold px-4 py-2 rounded-lg border border-blue-500 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                        Edit
                    </a>
                
                    <!-- Delete Button -->
                    <form action="{{ route('admin.bank.destroy', $bank->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 font-semibold px-4 py-2 rounded-lg border border-red-500 hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all">
                            Delete
                        </button>
                    </form>
                
                    <!-- Activate/Deactivate Button -->
                    <a href="{{ route('admin.bank.status', $bank->id) }}" class="text-green-500 hover:text-green-700 font-semibold px-4 py-2 rounded-lg border border-green-500 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-500 transition-all">
                        {{ $bank->status == 'active' ? 'Deactivate' : 'Activate' }}
                    </a>
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
