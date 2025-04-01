@extends('admin.layouts.app')

@section('content')

<main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
  <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
    <!-- Left Column -->
    <div class="col-span-12 2xl:col-span-12">

      <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
        <form action="{{ isset($package) ? route('admin.packages.update', $package->id) : route('admin.packages.store') }}" method="POST">
          @csrf
          
          <!-- If it's an update, we need the method spoofing -->
          @if (isset($package))
            @method('PUT')
          @endif

          <div class="grid gap-6 md:grid-cols-2">
            <div>
              <label for="package_name" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Package Name</label>
              <input
                type="text"
                id="package_name"
                name="package_name"
                class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                value="{{ old('package_name', $package->package_name ?? '') }}"
                required
              />
            </div>

            <div>
              <label for="investment_amount" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Investment Amount</label>
              <input
                type="number"
                id="investment_amount"
                name="investment_amount"
                class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                value="{{ old('investment_amount', $package->investment_amount ?? '') }}"
                required
              />
            </div>

            <div>
              <label for="profit_percentage" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Profit Percentage</label>
              <input
                type="number"
                id="profit_percentage"
                name="profit_percentage"
                class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                step="0.01"
                min="0"
                value="{{ old('profit_percentage', $package->profit_percentage ?? '') }}"
                required
              />
            </div>

            <div>
              <label for="description" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Description</label>
              <textarea
                id="description"
                name="description"
                class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                rows="4"
                required
              >{{ old('description', $package->description ?? '') }}</textarea>
            </div>
          </div>

          <div class="flex justify-end">
            <button
              type="submit"
              class="rounded-lg bg-success-300 px-12 py-3.5 font-semibold text-white transition-all hover:bg-success-400"
            >
              {{ isset($package) ? 'Update Package' : 'Save Package' }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

@endsection
