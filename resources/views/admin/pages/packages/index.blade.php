@extends('admin.layouts.app')

@section('content')

<main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
  <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
    <!-- Left Column -->
    <div class="col-span-12 2xl:col-span-12">
      <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
        
        <table class="w-full">
          <thead>
            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Package Name</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Investment Amount</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Profit Percentage</span>
              </th>
              <th class="px-6 py-5 text-left">
                <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Description</span>
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
            @foreach ($packages as $package)
              <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                <td class="px-6 py-5">
                  <p class="text-base font-semibold text-bgray-900 dark:text-white">{{ $package->package_name }}</p>
                </td>
                <td class="px-6 py-5">
                  <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">${{ number_format($package->investment_amount, 2) }}</p>
                </td>
                <td class="px-6 py-5">
                  <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">{{ $package->profit_percentage }}%</p>
                </td>
                <td class="px-6 py-5">
                  <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">{{ $package->description }}</p>
                </td>
                <td class="px-6 py-5">
                  <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">{{ $package->created_at->format('Y-m-d H:i') }}</p>
                </td>
                <td class="px-6 py-5">
                  <div class="flex justify-center space-x-4">
                    <a href="{{ route('admin.packages.edit', $package->id) }}" class="text-blue-500 hover:text-blue-700 font-semibold px-4 py-2 rounded-lg border border-blue-500 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">Edit</a>
                    <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this package?')" class="inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-red-500 hover:text-red-700 font-semibold px-4 py-2 rounded-lg border border-red-500 hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all">
                        Delete
                      </button>
                    </form>
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
