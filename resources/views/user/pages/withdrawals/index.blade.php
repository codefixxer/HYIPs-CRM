@extends('user.layouts.app')

@section('content')

<main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
  <div class="flex grid-cols-12 flex-col-reverse gap-10 lg:grid">
    <div class="col-span-12 2xl:col-span-12">
      <div class="rounded-lg bg-white px-6 py-8 dark:bg-darkblack-600">
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
                              class="text-base font-medium text-bgray-600 dark:text-bgray-50">Requested at</span>

                      </div>
                  </th>
                  <th class="px-6 py-5 xl:px-0">
                      <div class="flex items-center space-x-2.5">
                          <span
                              class="text-base font-medium text-bgray-600 dark:text-bgray-50">Accepted at(if accepted)</span>

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
        
        </table>
      </div>
    </div>
  </div>
</main>

@endsection
