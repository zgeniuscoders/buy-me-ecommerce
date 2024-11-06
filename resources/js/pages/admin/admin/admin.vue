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


const userCount = ref(0)
const shops = ref()

const props = usePage().props

shops.value = props.shops
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
                <div>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Boutique
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <template v-for="shop in shops.data" :key="shop.id">
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-3" type="checkbox"
                                                class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                                            <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        #{{ shop.id }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ shop.name }}
                                    </td>
                                    <td class="px-6 py-4 space-x-4">
                                        <button class="font-medium text-error hover:underline"
                                            @click="disabledShop(shop.id)">Desactiver</button>
                                        <a href="#" class="font-medium text-primary hover:underline">Voir les
                                            informations</a>
                                    </td>
                                </tr>
                            </template>

                        </tbody>
                    </table>

                    <pagination :next-page-uri="shops.next_page_url" :previous-page-url="shops.prev_page_url" />
                </div>

            </section>
        </div>
    </admin-layout>
</template>