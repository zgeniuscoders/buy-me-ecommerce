<script setup lang="ts">
import Layout from './layouts/layout.vue';
import Chart from 'chart.js/auto';
import { Link } from "@inertiajs/vue3";
import cardStats from '@/components/card-stats.vue';
import type {
    ColumnDef,
    ColumnFiltersState,
    ExpandedState,
    SortingState,
    VisibilityState,
} from '@tanstack/vue-table'
import { Button } from '@/components/ui/button'
import { Checkbox } from '@/components/ui/checkbox'
import { Input } from "@/components/ui/input";
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
import {
    DropdownMenu,
    DropdownMenuCheckboxItem,
    DropdownMenuContent,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu'
import { ArrowUpDown, ChevronDown } from 'lucide-vue-next'
import { h, ref, shallowRef, onMounted } from 'vue'

import { usePage } from "@inertiajs/vue3";
import { ProductInterface } from "@/models/ProductType";
import { Order } from "@/models/Order";


const props = usePage().props
const data = shallowRef<Order[]>()
data.value = props.orders

const stats = ref({
    totalOrdersPrice: 0,
    totalOrders: 0,
    totalCustomers: 0,
    customers: {}
})


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
    columnHelper.accessor('customer', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Name', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('customer')?.name),
    }),
    columnHelper.accessor('customer', {
        header: ({ column }) => {
            return h(Button, {
                variant: 'ghost',
                onClick: () => column.toggleSorting(column.getIsSorted() === 'asc'),
            }, () => ['Email', h(ArrowUpDown, { class: 'ml-2 h-4 w-4' })])
        },
        cell: ({ row }) => h('div', { class: 'lowercase' }, row.getValue('customer')?.email),
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

    const props = usePage().props

    stats.value.totalOrdersPrice = props.totalOrdersPrice
    stats.value.totalOrders = props.products.orders_count ? props.products.orders_count : 0
    stats.value.totalCustomers = props.totalCustomers

    const ctx = document.getElementById('myChart');

    console.log(ctx);
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apri', 'May', 'Jun', 'Jul', "Aou", "Sept", "Oct", "Nov", "Dec"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})


</script>

<template>
    <Layout>
        <div class="">

            <section class="p-4">

                <h3 class="text-2xl mb-4 mt-2 font-medium">Statistiques générales</h3>
                <div class="grid lg:grid-cols-3 lg:gap-6">
                    <card-stats text="Total ventes" bg-color="bg-primaty" :count="`$${stats.totalOrdersPrice}`" />
                    <card-stats text="Commandes" bg-color="bg-indigo-400" :count="`${stats.totalOrders}`" />
                    <card-stats text="Clients" bg-color="bg-pink-400" :count="`${stats.totalCustomers}`" />
                </div>

            </section>


            <section class="grid lg:grid-cols-2 gap-4 p-4">

                <!-- sales stats info  -->
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="font-medium text-xl">Total Sales</h3>

                    <div class="my-4 flex items-end justify-between">
                        <div>
                            <p class="text-gray-400">vs last years</p>
                            <h3 class="text-2xl font-bold">$6500,00</h3>
                        </div>
                        <span class="text-gray-500 text-sm">Juanary 2024 - December 2024</span>
                    </div>

                    <canvas id="myChart"></canvas>

                </div>


                <div class="bg-white rounded-md shadow-md p-4">
                    <div class="rounded-md bg-blue-100 p-4">
                        <h3 class="text-xl font-bold">Add Product</h3>
                        <h4 class="font-medium mt-2">Ajoutez vos premiers produits</h4>
                        <p class="mt-1 text-sm">Dans cette section, nous vous guiderons à travers le processus d'ajout
                            d'un nouvel article sur notre plateforme.s</p>

                        <button type="button"
                            class="bg-gray-800 py-2 px-4 rounded-md text-white mt-4 hover:bg-gray-900">
                            <Link href="/ma-boutique/articles/create">
                            Ajoutez un produit
                            </Link>
                        </button>
                    </div>
                </div>


            </section>

            <section class="p-4">
                
                <div class="w-full">
                    <div class="flex gap-2 items-center py-4">
                        <Input class="max-w-sm" placeholder="Filtrer par nom"
                            :model-value="table.getColumn('name')?.getFilterValue() as string"
                            @update:model-value=" table.getColumn('name')?.setFilterValue($event)" />
                        <DropdownMenu>
                            <DropdownMenuTrigger as-child>
                                <Button variant="outline" class="ml-auto">
                                    Columns
                                    <ChevronDown class="ml-2 h-4 w-4" />
                                </Button>
                            </DropdownMenuTrigger>
                            <DropdownMenuContent align="end">
                                <DropdownMenuCheckboxItem
                                    v-for="column in table.getAllColumns().filter((column) => column.getCanHide())"
                                    :key="column.id" class="capitalize" :checked="column.getIsVisible()"
                                    @update:checked="(value) => {
                                        column.toggleVisibility(!!value)
                                    }">
                                    {{ column.id }}
                                </DropdownMenuCheckboxItem>
                            </DropdownMenuContent>
                        </DropdownMenu>
                    </div>

                    <div class="rounded-md border">
                        <Table>
                            <TableHeader>
                                <TableRow v-for="headerGroup in table.getHeaderGroups()" :key="headerGroup.id">
                                    <TableHead v-for="header in headerGroup.headers" :key="header.id">
                                        <FlexRender v-if="!header.isPlaceholder"
                                            :render="header.column.columnDef.header" :props="header.getContext()" />
                                    </TableHead>
                                </TableRow>
                            </TableHeader>
                            <TableBody>
                                <template v-if="table.getRowModel().rows?.length">
                                    <template v-for="row in table.getRowModel().rows" :key="row.id">
                                        <TableRow :data-state="row.getIsSelected() && 'selected'">
                                            <TableCell v-for="cell in row.getVisibleCells()" :key="cell.id"
                                                :data-pinned="cell.column.getIsPinned()" :class="cn(
                                                    { 'sticky bg-background/95': cell.column.getIsPinned() },
                                                    cell.column.getIsPinned() === 'left' ? 'left-0' : 'right-0',
                                                )">
                                                <FlexRender :render="cell.column.columnDef.cell"
                                                    :props="cell.getContext()" />
                                            </TableCell>
                                        </TableRow>
                                        <TableRow v-if="row.getIsExpanded()">
                                            <TableCell :colspan="row.getAllCells().length">
                                                {{ row.original }}
                                            </TableCell>
                                        </TableRow>
                                    </template>
                                </template>

                                <TableRow v-else>
                                    <TableCell :colspan="columns.length" class="h-24 text-center">
                                        No results.
                                    </TableCell>
                                </TableRow>
                            </TableBody>
                        </Table>
                    </div>

                    <div class="flex items-center justify-end space-x-2 py-4">
                        <div class="flex-1 text-sm text-muted-foreground">
                            {{ table.getFilteredSelectedRowModel().rows.length }} of
                            {{ table.getFilteredRowModel().rows.length }} row(s) selected.
                        </div>
                        <div class="space-x-2">
                            <Button variant="outline" size="sm" :disabled="!table.getCanPreviousPage()"
                                @click="table.previousPage()">
                                Previous
                            </Button>
                            <Button variant="outline" size="sm" :disabled="!table.getCanNextPage()"
                                @click="table.nextPage()">
                                Next
                            </Button>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </Layout>
</template>

<style></style>
