<script setup lang="ts">

import { onMounted, ref } from 'vue';
import adminLayout from '../layouts/adminLayout.vue';
import cardStats from '@/components/card-stats.vue';
import { usePage } from '@inertiajs/vue3';

const userCount = ref(0)
const shops = ref()

onMounted(() => {
    const props = usePage().props
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

                            <template v-for="shop in shops" :key="shop.id">
                                <tr class="bg-background hover:bg-gray-50">
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
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-red-600 hover:underline">Desactiver</a>
                                        <a href="#" class="font-medium text-red-600 hover:underline">Cancel</a>
                                    </td>
                                </tr>
                            </template>

                        </tbody>
                    </table>
                </div>

            </section>
        </div>
    </admin-layout>
</template>