<script setup lang="ts">
import Layout from './store/layouts/layout.vue';
import {Link} from "@inertiajs/vue3";
import cardStats from '@/components/card-stats.vue';

import {ref, shallowRef, onMounted, h} from 'vue'

import {usePage} from "@inertiajs/vue3";
import {Order} from "@/models/Order";
import {CardContent, Card, CardHeader, CardTitle} from "@/components/ui/card";
import ChatCard from "@/components/chat/chat-card.vue";
import {createColumnHelper} from "@tanstack/vue-table";
import {Checkbox} from "@/components/ui/checkbox";
import {Button} from "@/components/ui/button";
import {ArrowUpDown} from "lucide-vue-next";
import DataTable from "@/components/data-table.vue";

const {totalOrdersPrice, products, totalCustomers, orders, orders_count} = usePage().props
const data = shallowRef<Order[]>()
data.value = orders


const stats = ref<{
    totalOrders: number,
}>({
    totalOrders: 0,
})


onMounted(() => {
    stats.value.totalOrders = orders_count ? products.orders_count : 0
})


const columnHelper = createColumnHelper<Order>()
const columns = [
    columnHelper.display({
        id: 'select',
        header: ({table}) => h(Checkbox, {
            'checked': table.getIsAllPageRowsSelected() || (table.getIsSomePageRowsSelected() && 'indeterminate'),
            'onUpdate:checked': value => table.toggleAllPageRowsSelected(!!value),
            'ariaLabel': 'Select all',
        }),
        cell: ({row}) => {
            return h(Checkbox, {
                'checked': row.getIsSelected(),
                'onUpdate:checked': value => row.toggleSelected(!!value),
                'ariaLabel': 'Select row',
            })
        },
        enableSorting: false,
        enableHiding: false,
    }),
    columnHelper.accessor('customer', {
        header: ({column}) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Name', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('customer')?.name),
    }),
    columnHelper.accessor('customer', {
        header: ({column}) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Email', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('customer')?.email),
    }),
    columnHelper.accessor('quantity', {
        header: ({column}) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Quantite', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('quantity')),
    }),
    columnHelper.accessor('status', {
        enablePinning: true,
        header: 'Status',
        cell: ({row}) => h('div', {class: 'capitalize'}, row.getValue('status')),
    }),
    // columnHelper.display({
    //     id: 'actions',
    //     enableHiding: false,
    //     cell: ({ row }) => {
    //         const payment = row.original

    //         return h('div', { class: 'relative' }, h(DropdownAction, {
    //             payment,
    //             onExpand: row.toggleExpanded,
    //         }))
    //     },
    // }),
]


</script>

<template>
    <Layout>
        <div class="space-y-4">

            <section>

                <h3 class="text-2xl mb-4 mt-2 font-medium">Statistiques générales</h3>
                <div class="grid lg:grid-cols-3 lg:gap-6">
                    <card-stats text="Total ventes" bg-color="bg-primary" :count="`$${totalOrdersPrice}`"
                                icon="wallet-outline"/>
                    <card-stats text="Commandes" bg-color="bg-indigo-400" :count="`${stats.totalOrders}`"
                                icon="pricetags-outline"/>
                    <card-stats text="Clients" bg-color="bg-pink-400" :count="`${totalCustomers}`"
                                icon="people-outline"/>
                </div>

            </section>


            <section class="grid  gap-4">
<!--                <ChatCard/>-->
                <!-- sales stats info  -->
                <!--                <div class="bg-white p-4 rounded-md shadow-md">-->
                <!--                    <h3 class="font-medium text-xl">Total Sales</h3>-->

                <!--                    <div class="my-4 flex items-end justify-between">-->
                <!--                        <div>-->
                <!--                            <p class="text-gray-400">vs last years</p>-->
                <!--                            <h3 class="text-2xl font-bold">$6500,00</h3>-->
                <!--                        </div>-->
                <!--                        <span class="text-gray-500 text-sm">Juanary 2024 - December 2024</span>-->
                <!--                    </div>-->

                <!--                    <canvas id="myChart"></canvas>-->

                <!--                </div>-->


                <div class="bg-white rounded-md shadow-md p-4">
                    <div class="rounded-md bg-blue-100 p-4">
                        <h3 class="text-xl font-bold">Add Product</h3>
                        <h4 class="font-medium mt-2">Ajoutez vos premiers produits</h4>
                        <p class="mt-1 text-sm">Dans cette section, nous vous guiderons à travers le processus d'ajout
                            d'un nouvel article sur notre plateforme.s</p>


                        <div class="mt-4">
                            <Link href="/ma-boutique/articles/create"
                                  class="bg-gray-800 py-2 px-4 rounded-md text-white mt-4 hover:bg-gray-900">
                                Ajoutez un produit
                            </Link>
                        </div>

                    </div>
                </div>


            </section>

            <section>
                <Card>
                    <CardHeader>
                        <CardTitle>Commandes récentes</CardTitle>
                    </CardHeader>
                    <CardContent>
                        <data-table :data="data" :columns="columns"/>
                    </CardContent>
                </Card>
            </section>

<!--            <section class="grid md:grid-cols-6 gap-4">-->
<!--                <div class="md:col-span-4 space-y-4">-->
<!--                    <Card>-->
<!--                        <CardHeader>-->
<!--                            <CardTitle>Commandes récentes</CardTitle>-->
<!--                        </CardHeader>-->
<!--                        <CardContent>-->
<!--                            <data-table :data="data" :columns="columns"/>-->
<!--                        </CardContent>-->
<!--                    </Card>-->
<!--                </div>-->
<!--&lt;!&ndash;                <div class="md:col-span-2 space-y-4">&ndash;&gt;-->
<!--&lt;!&ndash;                    <Card>&ndash;&gt;-->
<!--&lt;!&ndash;                        <CardHeader>&ndash;&gt;-->
<!--&lt;!&ndash;                            <CardTitle>Produits les plus vendus</CardTitle>&ndash;&gt;-->
<!--&lt;!&ndash;                        </CardHeader>&ndash;&gt;-->
<!--&lt;!&ndash;                        <CardContent>&ndash;&gt;-->
<!--&lt;!&ndash;                            <data-table :data="data" :columns="columns"/>&ndash;&gt;-->
<!--&lt;!&ndash;                        </CardContent>&ndash;&gt;-->
<!--&lt;!&ndash;                    </Card>&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--            </section>-->

        </div>
    </Layout>
</template>

<style></style>
