<script setup lang="ts">

import adminLayout from '../../layouts/adminLayout.vue';
import { usePage } from '@inertiajs/vue3';
import dataTable from '@/components/data-table.vue';
import { Button } from '@/components/ui/button'
import { Checkbox } from '@/components/ui/checkbox'

import { createColumnHelper } from '@tanstack/vue-table'
import { ArrowUpDown } from 'lucide-vue-next'
import { h, ref } from 'vue'
import DropdownAction from '../components/shopDropdownAction.vue';

import { Shop } from '@/models/Shop';

const data = ref()
const { shops } = usePage().props

data.value = shops

const columnHelper = createColumnHelper<Shop>()

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
            }, () => ['Nom de la boutique', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('name')),
    }),
    columnHelper.accessor('is_disabled', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Status de la boutique', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('is_disabled')),
    }),
    columnHelper.accessor('created_at', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Date création', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('created_at')),
    }),
    columnHelper.display({
        id: 'actions',
        enableHiding: false,
        cell: ({ row }) => {
            const shop = row.original

            return h('div', { class: 'relative' }, h(DropdownAction, {
                shop,
                onExpand: row.toggleExpanded,
            }))
        },
    }),
]



</script>

<template>

    <admin-layout>
        <section class="">

            <h3 class="text-2xl mb-4 font-medium px-4 mt-4">Nos boutiques</h3>

            <data-table :data="data" :columns="columns" />

        </section>
    </admin-layout>

</template>
