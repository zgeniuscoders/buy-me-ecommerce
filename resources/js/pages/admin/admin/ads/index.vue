<script setup lang="ts">
import AdminLayout from "@/pages/admin/admin/layouts/adminLayout.vue";
import {Link, usePage} from '@inertiajs/vue3';
import {Button} from '@/components/ui/button'
import dataTable from '@/components/data-table.vue'
import {createColumnHelper} from "@tanstack/vue-table";
import {h, shallowRef} from "vue";
import {ArrowUpDown} from "lucide-vue-next";
import {Checkbox} from "@/components/ui/checkbox";
import DropdownAction from "./components/adsDropdownAction.vue"
import {Ads} from "@/models/Ads.ts";

const {createAdsRoute,ads} = usePage().props

const columnHelper = createColumnHelper<Ads>()
const data = shallowRef<Ads[]>([])
data.value = ads

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
    columnHelper.accessor('title', {
        header: ({column}) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Titre', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('title')),
    }),
    columnHelper.accessor('url', {
        header: ({column}) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Url', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('url')),
    }),
    columnHelper.accessor('status', {
        enablePinning: true,
        header: 'Status',
        cell: ({row}) => h('div', {class: 'capitalize'}, row.getValue('status')),
    }),
    columnHelper.accessor('start_at', {
        enablePinning: true,
        header: 'Date debut',
        cell: ({row}) => h('div', {class: 'capitalize'}, row.getValue('start_at')),
    }),
    columnHelper.accessor('end_at', {
        enablePinning: true,
        header: 'Date fin',
        cell: ({row}) => h('div', {class: 'capitalize'}, row.getValue('end_at')),
    }),
    columnHelper.display({
        id: 'actions',
        enableHiding: false,
        cell: ({row}) => {
            const ads = row.original

            return h('div', {class: 'relative'}, h(DropdownAction, {
                ads,
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
                <h1 class="text-xl font-medium">Publicités</h1>
                <Link :href='createAdsRoute'
                      class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-4 focus:ring-primary">
                    Cree un publicité
                </Link>
            </div>

            <data-table :data="data" :columns="columns"/>

        </section>
    </admin-layout>
</template>

<style scoped>

</style>
