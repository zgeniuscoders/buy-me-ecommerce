<div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
        <p class="text-xl font-semibold text-gray-900">Order summary</p>

        <div class="space-y-4">
            <div class="space-y-2">
                <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500">Original price</dt>
                    <dd class="text-base font-medium text-gray-900">$7,592.00</dd>
                </dl>

                <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500">Savings</dt>
                    <dd class="text-base font-medium text-green-600">-$299.00</dd>
                </dl>

                <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500">Store Pickup</dt>
                    <dd class="text-base font-medium text-gray-900">$99</dd>
                </dl>

                <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500">Tax</dt>
                    <dd class="text-base font-medium text-gray-900">$799</dd>
                </dl>
            </div>

            <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                <dt class="text-base font-bold text-gray-900">Total</dt>
                <dd class="text-base font-bold text-gray-900">${{$totalPrice}}</dd>
            </dl>
        </div>

        <a href="#" class="flex w-full items-center justify-center rounded-lg bg-orange-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300">Proceed to Checkout</a>

        <div class="flex items-center justify-center gap-2">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
            <a href="#" title="" class="inline-flex items-center gap-2 text-sm font-medium text-orange-700 underline hover:no-underline">
                Continue Shopping
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </a>
        </div>
    </div>

    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
        <form class="space-y-4">
            <div>
                <label for="voucher" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Do you have a voucher or gift card? </label>
                <input type="text" id="voucher" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-orange-500 focus:ring-orange-500" placeholder="" required />
            </div>
            <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-orange-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300">Apply Code</button>
        </form>
    </div>
</div>
