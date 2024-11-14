<template>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="p-4">
                <div class="flex items-center">
                    <input id="checkbox-all-search" type="checkbox"
                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                Product name
            </th>
            <th scope="col" class="px-6 py-3">
                Qty
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Category
            </th>
            <th scope="col" class="px-6 py-3">
                Discount
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        <template v-for="product in props.products" :key="product.id">
            <tr class="bg-white border-b hover:bg-gray-50">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox"
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ product.name }}
                </th>
                <td class="px-6 py-4">
                    {{ product.qty }}
                </td>
                <td class="px-6 py-4">
                    {{ product.status }}
                </td>
                <td class="px-6 py-4">
                    {{ product.category.name }}
                </td>
                <td class="px-6 py-4">
                    {{ product.discount }}%
                </td>
                <td class="px-6 py-4">
                    ${{ product.price }}
                </td>
                <td class="px-6 py-4">

                    <Link :href="`/products/${product.id}/edit`"
                          class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        Edit
                    </Link>

                </td>
            </tr>
        </template>
        </tbody>
    </table>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    products: Object
})
</script>

<style scoped>

</style>
