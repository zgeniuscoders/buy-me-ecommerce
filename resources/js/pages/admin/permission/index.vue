<script setup lang="ts">

import {usePage,Link} from "@inertiajs/vue3";
import AdminLayout from "@/pages/admin/layouts/adminLayout.vue";
import {h, shallowRef} from "vue";
import {createColumnHelper} from "@tanstack/vue-table";
import {Checkbox} from "@/components/ui/checkbox";
import {Button} from "@/components/ui/button";
import {ArrowUpDown} from "lucide-vue-next";
import DropdownAction from "@/pages/admin/permission/components/permissionDropdownAction.vue";
import {Permission} from "@/models/Permission.ts";
import DataTable from "@/components/data-table.vue";
const {permissions} = usePage().props

const data = shallowRef<Permission[]>([])
data.value = permissions

const columnHelper = createColumnHelper<Permission>()
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
    columnHelper.accessor('guard_name', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['guard_name', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('guard_name')),
    }),
    columnHelper.display({
        id: 'actions',
        enableHiding: false,
        cell: ({row}) => {
            const permission = row.original

            return h('div', {class: 'relative'}, h(DropdownAction, {
                permission,
                onExpand: row.toggleExpanded,
            }))
        },
    }),
]


</script>

<template>
<admin-layout>
    <div>
        <div class="mb-4 flex items-center justify-between space-y-2">
            <h1 class="text-2xl font-bold tracking-tight">Permissions</h1>
            <div class="flex gap-2">
                <Button>
                    <Link href="/admin/permissions/create">Ajouter une permission</Link>
                </Button>
            </div>
        </div>
        <data-table :data="data" :columns="columns"/>
    </div>
</admin-layout>
</template>

<style scoped>

</style>
