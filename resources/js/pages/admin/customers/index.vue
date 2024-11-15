<script setup lang="ts">


import adminLayout from '../layouts/adminLayout.vue';

import {Button} from "@/components/ui/button";
import {h, shallowRef} from "vue";
import {createColumnHelper} from "@tanstack/vue-table";
import {Checkbox} from "@/components/ui/checkbox";
import {ArrowUpDown} from "lucide-vue-next";
import DropdownAction from "@/pages/admin/customers/components/customerDropdownAction.vue";
import {User} from "@/models/User.ts";
import DataTable from "@/components/data-table.vue";
import {usePage} from "@inertiajs/vue3";

const {customers} = usePage().props
const data = shallowRef<User[]>([])
data.value = customers

const columnHelper = createColumnHelper<User>()
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
    columnHelper.accessor('name', {
        header: ({column}) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Name', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('name')),
    }),
    columnHelper.accessor('email', {
        header: ({column}) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Adresse email', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('email')),
    }),
    columnHelper.display({
        id: 'actions',
        enableHiding: false,
        cell: ({row}) => {
            const user = row.original

            return h('div', {class: 'relative'}, h(DropdownAction, {
                user,
                onExpand: row.toggleExpanded,
            }))
        },
    }),
]
</script>

<template>

    <admin-layout>
        <div class="mb-4 flex items-center justify-between space-y-2">
            <h1 class="text-2xl font-bold tracking-tight">Gestion clients</h1>
        </div>
        <div>
            <data-table :data="data" :columns="columns"/>
        </div>
    </admin-layout>

</template>



