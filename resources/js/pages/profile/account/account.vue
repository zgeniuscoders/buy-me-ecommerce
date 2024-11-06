<script setup lang="ts">

import accountLayout from "../layouts/accountLayout.vue"
import dataTable from "@/components/data-table.vue";
import { Checkbox } from '@/components/ui/checkbox'
import { Button } from '@/components/ui/button'

import { usePage } from '@inertiajs/vue3';
import {createColumnHelper} from '@tanstack/vue-table'

import { ArrowUpDown } from 'lucide-vue-next'
import { h, shallowRef } from 'vue'

import { Order } from "@/models/Order";

const { products } = usePage().props
const data = shallowRef<Order[]>([])
data.value = products

const columnHelper = createColumnHelper<Order>()
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
    columnHelper.accessor('quantity', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Quantite', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('quantity')),
    }),
    columnHelper.accessor('product', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Nom de l\'article', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('product')?.name),
    }),
    columnHelper.accessor('product', {
        header: () => h('div', { class: 'text-right' }, 'Prix'),
        cell: ({ row }) => {
            const amount = Number.parseFloat(row.getValue('product')?.price) * Number.parseFloat(row.getValue('quantity'))

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
    <account-layout>
        <section class="py-2">
            <h1 class="text-xl font-medium p-4">Mes Commandes</h1>

            <data-table :data="data" :columns="columns" />

        </section>
    </account-layout>
</template>