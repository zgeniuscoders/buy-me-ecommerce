<script setup lang="ts">


import { Button } from '@/components/ui/button'
import { Checkbox } from '@/components/ui/checkbox'
import dataTable from '@/components/data-table.vue'
import { createColumnHelper } from '@tanstack/vue-table'
import { ArrowUpDown } from 'lucide-vue-next'
import { h, shallowRef } from 'vue'
import DropdownAction from './components/productDropdownAction.vue'

import Layout from "../../layouts/layout.vue";
import { usePage,Link } from "@inertiajs/vue3";
import { ProductInterface } from '@/models/ProductType'

const props = usePage().props
const data = shallowRef<ProductInterface[]>([])
data.value = props.products

const columnHelper = createColumnHelper<ProductInterface>()

const columns = [
    columnHelper.display({
        id: 'select',
        header: ({ table }) => h(Checkbox, {
            'checked': table.getIsAllPageRowsSelected() || (table.getIsSomePageRowsSelected() && 'indeterminate'),
            'onUpdate:checked': value => table.toggleAllPageRowsSelected(!!value),
            'ariaLabel': 'Select all',
        }),
        cell: ({ row }) => {
            return h(Checkbox, {
                'checked': row.getIsSelected(),
                'onUpdate:checked': value => row.toggleSelected(!!value),
                'ariaLabel': 'Select row',
            })
        },
        enableSorting: false,
        enableHiding: false,
    }),
    columnHelper.accessor('name', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Name', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('name')),
    }),
    columnHelper.accessor('category', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Categorie', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('category')?.name),
    }),
    columnHelper.accessor('qty', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Quantite en stock', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('qty')),
    }),
    columnHelper.accessor('price', {
        header: () => h('div', { class: 'text-right' }, 'Price'),
        cell: ({ row }) => {
            const amount = Number.parseFloat(row.getValue('price'))

            // Format the amount as a dollar amount
            const formatted = new Intl.NumberFormat('fr-FR', {
                style: 'currency',
                currency: 'USD',
            }).format(amount)

            return h('div', { class: 'text-right font-medium' }, formatted)
        },
    }),
    columnHelper.accessor('status', {
        enablePinning: true,
        header: 'Status',
        cell: ({ row }) => h('div', { class: 'capitalize' }, row.getValue('status')),
    }),
    columnHelper.display({
        id: 'actions',
        enableHiding: false,
        cell: ({ row }) => {
            const product = row.original

            return h('div', { class: 'relative' }, h(DropdownAction, {
                product,
                onExpand: row.toggleExpanded,
            }))
        },
    }),
]


</script>

<template>
    <Layout>

        <section class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <div class="flex items-center justify-between px-4">
                <h3 class="text-2xl font-medium">Mes articles</h3>


                <Link href="/ma-boutique/articles/create"
                    class="bg-gray-800 py-2 px-4 rounded-md text-white mt-4 hover:bg-gray-900">
                Ajoutez un produit
                </Link>

            </div>

            <data-table :data="data" :columns="columns" />

        </section>

    </Layout>
</template>

<style scoped></style>
