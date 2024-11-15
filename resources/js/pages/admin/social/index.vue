<script setup lang="ts">

import AdminLayout from "@/pages/admin/layouts/adminLayout.vue";

import {usePage} from "@inertiajs/vue3";
import {h, shallowRef} from "vue";
import {createColumnHelper} from "@tanstack/vue-table";
import {Checkbox} from "@/components/ui/checkbox";
import {Button} from "@/components/ui/button";
import {ArrowUpDown} from "lucide-vue-next";
import DropdownAction from "@/pages/admin/social/components/socialDropdownAction.vue";
import {SocialNetwork} from "@/models/SocialNetwork.ts";
import DataTable from "@/components/data-table.vue";


const {socials} = usePage().props
const data = shallowRef<SocialNetwork[]>([])
data.value = socials

const columnHelper = createColumnHelper<SocialNetwork>()
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
            }, () => ['Nom', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('name')),
    }),
    columnHelper.accessor('link', {
        header: ({column}) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Lien', h(ArrowUpDown, {class: 'ml-2 h-4 w-4'})])
        },
        cell: ({row}) => h('div', {class: 'lowercase'}, row.getValue('link')),
    }),
    columnHelper.display({
        id: 'actions',
        enableHiding: false,
        cell: ({row}) => {
            const social = row.original

            return h('div', {class: 'relative'}, h(DropdownAction, {
                social,
                onExpand: row.toggleExpanded,
            }))
        },
    }),
]


</script>

<template>
    <admin-layout>
        <div>
            <data-table :data="data" :columns="columns"/>
        </div>
    </admin-layout>
</template>

<style scoped>

</style>
