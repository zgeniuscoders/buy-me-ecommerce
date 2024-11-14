<script setup>

</script>

<template>
    <div>
        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5"
                type="button">
            <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
            </svg>
            Last 30 days
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownRadio"
             class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow"
             data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
             style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownRadioButton">
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio"
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-1"
                               class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last
                            day</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped>

</style>
