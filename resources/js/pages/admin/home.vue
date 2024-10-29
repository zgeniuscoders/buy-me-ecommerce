<script setup lang="ts">
import { onMounted, ref } from 'vue';
import Layout from './layouts/layout.vue';
import Chart from 'chart.js/auto';
import { Link, usePage } from "@inertiajs/vue3";
import cardStats from '@/components/card-stats.vue';

const stats = ref({
    totalOrdersPrice: 0,
    totalOrders: 0,
    totalCustomers: 0,
    customers: {}
})

onMounted(() => {

    const props = usePage().props

    stats.value.totalOrdersPrice = props.totalOrdersPrice
    stats.value.totalOrders = props.totalOrders
    stats.value.totalCustomers = props.totalCustomers

    const ctx = document.getElementById('myChart');

    console.log(ctx);
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apri', 'May', 'Jun', 'Jul', "Aou", "Sept", "Oct", "Nov", "Dec"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})


</script>

<template>
    <Layout>
        <div class="">

            <section class="p-4">

                <h3 class="text-2xl mb-4 mt-2 font-medium">Statistiques générales</h3>
                <div class="grid lg:grid-cols-3 lg:gap-6">
                    <card-stats text="Total ventes" bg-color="bg-primaty" :count="`$${stats.totalOrdersPrice}`" />
                    <card-stats text="Commandes" bg-color="bg-indigo-400" :count="`${stats.totalOrders}`" />
                    <card-stats text="Clients" bg-color="bg-pink-400" :count="`${stats.totalCustomers}`" />
                </div>

            </section>


            <section class="grid lg:grid-cols-2 gap-4 p-4">

                <!-- sales stats info  -->
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="font-medium text-xl">Total Sales</h3>

                    <div class="my-4 flex items-end justify-between">
                        <div>
                            <p class="text-gray-400">vs last years</p>
                            <h3 class="text-2xl font-bold">$6500,00</h3>
                        </div>
                        <span class="text-gray-500 text-sm">Juanary 2024 - December 2024</span>
                    </div>

                    <canvas id="myChart"></canvas>

                </div>


                <div class="bg-white rounded-md shadow-md p-4">
                    <div class="rounded-md bg-blue-100 p-4">
                        <h3 class="text-xl font-bold">Add Product</h3>
                        <h4 class="font-medium mt-2">Add your first products</h4>
                        <p class="mt-1 text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis
                            perferendis minus
                            adipisci natus velit
                            corporis nemo autem accusantium perspiciatis sed? Voluptates</p>

                        <button type="button"
                            class="bg-gray-800 py-2 px-4 rounded-md text-white mt-4 hover:bg-gray-900">
                            <Link href="/ma-boutique/articles/create">
                            Add Product
                            </Link>
                        </button>
                    </div>
                </div>


            </section>

            <section class="p-4">


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div
                        class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white p-4">
                        <div>
                            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                                class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5"
                                type="button">
                                <span class="sr-only">Action button</span>
                                Action
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownAction"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownActionButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
                                            account</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                        User</a>
                                </div>
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search-users"
                                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search for users">
                        </div>
                    </div>

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom du client
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Product
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Qty
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <template v-for="customer in stats.customers.data" :key="customer.id">
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-3" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                            <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        #{{ customer.id }}
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <img class="w-10 h-10 rounded-full" v-if="customer.profile"
                                            src="https://unsplash.com/photos/ai-generated-portrait-of-a-dark-haired-model-wearing-a-pink-shirt-nT57h53Dq3c"
                                            alt="Jese image">

                                        <div v-else
                                            class="w-10 h-10 rounded-full bg-primary dark:bg-primary-dark text-center flex items-center justify-center text-white">
                                            {{ customer.name[0] }}
                                        </div>

                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{ customer.name }}</div>
                                            <div class="font-normal text-gray-500">{{ customer.email }}</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        SEO Specialist
                                    </td>
                                    <td class="px-6 py-4">
                                        100
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 me-2"></div>
                                            Pending
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-red-600 hover:underline">Cancel</a>
                                    </td>
                                </tr>
                            </template>

                        </tbody>
                    </table>

                </div>

            </section>

        </div>
    </Layout>
</template>

<style></style>
