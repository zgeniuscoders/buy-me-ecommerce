<script setup lang="ts">

import adminLayout from '../../layouts/adminLayout.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";
import { shallowRef, h } from 'vue';
import { Category } from '@/models/ProductType';

import { Button } from '@/components/ui/button'
import { Checkbox } from '@/components/ui/checkbox'
import dataTable from '@/components/data-table.vue'
import { createColumnHelper } from '@tanstack/vue-table'
import { ArrowUpDown } from 'lucide-vue-next'
import DropdownAction from './components/categoryDropdownAction.vue';

const { categories } = usePage().props
const toaster = createToaster();

const data = shallowRef<Category[]>([])
data.value = categories

const columnHelper = createColumnHelper<Category>()

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
    columnHelper.accessor('slug', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Slug', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('slug')),
    }),
    columnHelper.accessor('category', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Category', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('category')?.name ? row.getValue('category')?.name : "pas definie"),
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
            const category = row.original

            return h('div', { class: 'relative' }, h(DropdownAction, {
                category,
                onExpand: row.toggleExpanded,
            }))
        },
    }),
]


</script>


<template>

    <admin-layout>

        <section class="py-2">
            <div class="flex items-center justify-between p-4">
                <h1 class="text-xl font-medium">Categories</h1>
                <Link href='/admin/categories/create'
                    class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-4 focus:ring-primary">
                Ajouter une categorie</Link>
            </div>

            <data-table :data="data" :columns="columns" />

        </section>

    </admin-layout>

</template>