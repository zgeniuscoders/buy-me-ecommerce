<script setup lang="ts">
import Layout from './layouts/layout.vue';
import Chart from 'chart.js/auto';
import { Link } from "@inertiajs/vue3";
import cardStats from '@/components/card-stats.vue';

import { ref, shallowRef, onMounted } from 'vue'

import { usePage } from "@inertiajs/vue3";
import { ProductInterface } from "@/models/ProductType";
import { Order } from "@/models/Order";


const props = usePage().props
const data = shallowRef<Order[]>()
data.value = props.orders

const state = ref<{
    products: ProductInterface[]
}>({
    products: []
})
const stats = ref<{
    totalOrdersPrice: number,
    totalOrders: number,
    totalCustomers: number,
    customers: {}
}>({
    totalOrdersPrice: 0,
    totalOrders: 0,
    totalCustomers: 0,
    customers: {}
})


onMounted(() => {

    const props = usePage().props

    stats.value.totalOrdersPrice = props.totalOrdersPrice
    stats.value.totalOrders = state.products.orders_count ? state.products.orders_count : 0
    stats.value.totalCustomers = props.totalCustomers

    const ctx = document.getElementById('myChart');

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
                        <h4 class="font-medium mt-2">Ajoutez vos premiers produits</h4>
                        <p class="mt-1 text-sm">Dans cette section, nous vous guiderons à travers le processus d'ajout
                            d'un nouvel article sur notre plateforme.s</p>

                        <button type="button"
                            class="bg-gray-800 py-2 px-4 rounded-md text-white mt-4 hover:bg-gray-900">
                            <Link href="/ma-boutique/articles/create">
                            Ajoutez un produit
                            </Link>
                        </button>
                    </div>
                </div>


            </section>

        </div>
    </Layout>
</template>

<style></style>
