@extends('admin.layouts.app')

@section('content')

<main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
  <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
    <!-- Left Column -->
    <div class="col-span-12 2xl:col-span-12">

      <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
        <!-- Form Action based on whether it's Create or Edit -->
        <form action="{{ isset($userPackage) ? route('admin.user_packages.update', $userPackage->id) : route('admin.user_packages.store') }}" method="POST">
          @csrf
          
          <!-- If it's an edit, we need to add the method spoofing -->
          @if(isset($userPackage))
            @method('PUT') <!-- Using PUT for update -->
            <input type="hidden" name="id" value="{{ $userPackage->id }}">
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
                <option value="" disabled {{ old('user_id', $userPackage->user_id ?? '') ? '' : 'selected' }}>Select a User</option>
                @foreach ($users as $user)
                  <option value="{{ $user->id }}" {{ old('user_id', $userPackage->user_id ?? '') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
              </select>
            </div>

            <!-- Package -->
            <div>
              <label for="package_id" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Package</label>
              <select
                id="package_id"
                name="package_id"
                class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                required
              >
                <option value="" disabled {{ old('package_id', $userPackage->package_id ?? '') ? '' : 'selected' }}>Select a Package</option>
                @foreach ($packages as $package)
                  <option value="{{ $package->id }}" {{ old('package_id', $userPackage->package_id ?? '') == $package->id ? 'selected' : '' }}>{{ $package->package_name }}</option>
                @endforeach
              </select>
            </div>

            <!-- Investment Amount -->
            <div>
              <label for="investment_amount" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Investment Amount</label>
              <input
                type="number"
                id="investment_amount"
                name="investment_amount"
                class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                value="{{ old('investment_amount', $userPackage->investment_amount ?? '') }}"
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
                <option value="active" {{ old('status', $userPackage->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="completed" {{ old('status', $userPackage->status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="withdrawn" {{ old('status', $userPackage->status ?? '') == 'withdrawn' ? 'selected' : '' }}>Withdrawn</option>
              </select>
            </div>

            <!-- Start Date -->
            <div>
              <label for="start_date" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">Start Date</label>
              <input
                type="date"
                id="start_date"
                name="start_date"
                class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                value="{{ old('start_date', $userPackage->start_date ?? '') }}"
                required
              />
            </div>

            <!-- End Date -->
            <div>
              <label for="end_date" class="text-basse mb-2 block font-medium text-bgray-600 dark:text-bgray-50">End Date (Optional)</label>
              <input
                type="date"
                id="end_date"
                name="end_date"
                class="w-full rounded-lg border-0 bg-bgray-50 p-4 focus:border focus:border-success-300 focus:ring-0 dark:bg-darkblack-500 dark:text-white"
                value="{{ old('end_date', $userPackage->end_date ?? '') }}"
              />
            </div>

          </div>

          <div class="flex justify-end">
            <button
              type="submit"
              class="rounded-lg bg-success-300 px-12 py-3.5 font-semibold text-white transition-all hover:bg-success-400"
            >
              {{ isset($userPackage) ? 'Update User Package' : 'Save User Package' }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

@endsection
