<script setup lang="ts">

import { onMounted } from 'vue';
import adminLayout from '../layouts/adminLayout.vue';
import cardStats from '@/components/card-stats.vue';
import { usePage, useForm } from '@inertiajs/vue3';
import pagination from '@/components/pagination.vue';
import dataTable from '@/components/data-table.vue';
import type {
    ColumnDef,
    ColumnFiltersState,
    ExpandedState,
    SortingState,
    VisibilityState,
} from '@tanstack/vue-table'
import { Button } from '@/components/ui/button'
import { Checkbox } from '@/components/ui/checkbox'
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table'
import { cn, valueUpdater } from '@/lib/utils'
import {
    createColumnHelper,
    FlexRender,
    getCoreRowModel,
    getExpandedRowModel,
    getFilteredRowModel,
    getPaginationRowModel,
    getSortedRowModel,
    useVueTable,
} from '@tanstack/vue-table'
import { ArrowUpDown, ChevronDown } from 'lucide-vue-next'
import { h, ref, shallowRef } from 'vue'
// import DropdownAction from './DataTableDemoColumn.vue'

import {
    DropdownMenu,
    DropdownMenuCheckboxItem,
    DropdownMenuContent,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu'
import { Input } from '@/components/ui/input'
import { Shop } from '@/models/Shop';


const userCount = ref(0)
const data = ref()

const props = usePage().props

data.value = props.shops
const router = useForm({
    shopId: null
});


const disabledShop = (id: number) => {
    router.shopId = id
    router.post('/admin/disable-shop', {
        onError: (e) => {

        },
        onSuccess: (e) => {

        }
    })
}

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


const sorting = ref<SortingState>([])
const columnFilters = ref<ColumnFiltersState>([])
const columnVisibility = ref<VisibilityState>({})
const rowSelection = ref({})
const expanded = ref<ExpandedState>({})


const table = useVueTable({
    data,
    columns,
    getCoreRowModel: getCoreRowModel(),
    getPaginationRowModel: getPaginationRowModel(),
    getSortedRowModel: getSortedRowModel(),
    getFilteredRowModel: getFilteredRowModel(),
    getExpandedRowModel: getExpandedRowModel(),
    onSortingChange: updaterOrValue => valueUpdater(updaterOrValue, sorting),
    onColumnFiltersChange: updaterOrValue => valueUpdater(updaterOrValue, columnFilters),
    onColumnVisibilityChange: updaterOrValue => valueUpdater(updaterOrValue, columnVisibility),
    onRowSelectionChange: updaterOrValue => valueUpdater(updaterOrValue, rowSelection),
    onExpandedChange: updaterOrValue => valueUpdater(updaterOrValue, expanded),
    state: {
        get sorting() { return sorting.value },
        get columnFilters() { return columnFilters.value },
        get columnVisibility() { return columnVisibility.value },
        get rowSelection() { return rowSelection.value },
        get expanded() { return expanded.value },
        columnPinning: {
            left: ['id'],
        },
    },
})


onMounted(() => {
    userCount.value = props.userCounts
    shops.value = props.shops

})

</script>

<template>
    <admin-layout>
        <div class="space-y-4 container mx-auto px-4">
            <section class="pt-4">

                <h3 class="text-2xl mb-4 mt-2 font-medium">Overview stats</h3>
                <div class="grid lg:grid-cols-3 lg:gap-6">
                    <card-stats bg-color="bg-primary" text="Utilisateurs" :count="userCount" />
                    <card-stats bg-color="bg-indigo-400" text="Clients" count="10" />
                    <card-stats bg-color="bg-pink-400" text="Vendeurs" count="10" />
                </div>

            </section>

            <section class="">

                <h3 class="text-2xl mb-4 mt-2 font-medium">Nos boutiques</h3>

                <data-table :table="table" />

            </section>
        </div>
    </admin-layout>
</template>