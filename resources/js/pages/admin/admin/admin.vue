<script setup lang="ts">

import adminLayout from './layouts/adminLayout.vue';
import cardStats from '@/components/card-stats.vue';
import { usePage } from '@inertiajs/vue3';

import dataTable from '@/components/data-table.vue';

import { Button } from '@/components/ui/button'
import { Checkbox } from '@/components/ui/checkbox'

import {createColumnHelper} from '@tanstack/vue-table'
import { ArrowUpDown } from 'lucide-vue-next'
import { h, ref } from 'vue'
import DropdownAction from './components/shopDropdownAction.vue';


import { Shop } from '@/models/Shop';

const data = ref()

const { shops,userCounts } = usePage().props

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
        <div class="space-y-4">
            <section class="p-4">

                <h3 class="text-2xl mb-4 mt-2 font-medium">Overview stats</h3>
                <div class="grid lg:grid-cols-3 lg:gap-6">
                    <card-stats bg-color="bg-primary" text="Utilisateurs" :count="userCounts" icon="people-outline"/>
                    <card-stats bg-color="bg-indigo-400" text="Clients" count="10" icon="people-outline"/>
                    <card-stats bg-color="bg-pink-400" text="Vendeurs" count="10" icon="people-outline"/>
                </div>

            </section>

            <section class="">

                <h3 class="text-2xl font-medium px-4">Nos boutiques</h3>

                <data-table :data="data" :columns="columns" />


<!--                <div class="gap-8 lg:flex">-->
<!--                    <user-list/>-->
<!--                    <chat-messages/>-->
<!--                </div>-->

            </section>
        </div>
    </admin-layout>
</template>
