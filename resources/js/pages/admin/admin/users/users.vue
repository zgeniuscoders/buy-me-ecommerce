<script setup lang="ts">

import { usePage, Link } from '@inertiajs/vue3';
import adminLayout from '../../layouts/adminLayout.vue';
import { onMounted, ref } from 'vue';
import sortCard from '@/components/sort-card.vue';

const props = usePage().props
const users = ref({})

users.value = props.users


</script>

<template>

    <admin-layout>
        <div class="space-y-4 container mx-auto py-2">

            <div class="flex items-center justify-between p-4">

                <h3 class="text-2xl font-medium">Utilisateurs</h3>
                <Link href='/admin/utilisateurs/create'
                    class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-4 focus:ring-primary">
                Ajouter un utilisateur</Link>

            </div>

            <div>
                <sort-card />
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nom
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Adresse e-mail
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <template v-for="user in users.data" :key="user.id">
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    {{ user.id }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ user.name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ user.email }}
                                </td>
                                <td class="px-6 py-4">
                                    Admin
                                </td>
                                <td class="px-6 py-4 space-x-4">
                                    <a href="#" class="font-medium text-error hover:underline">Desactiver</a>
                                    <Link :href="`/admin/utilisateurs/${user.id}/edit`"
                                        class="font-medium text-primary hover:underline">Modifier</Link>
                                </td>
                            </tr>
                        </template>

                    </tbody>
                </table>

                <pagination :next-page-uri="users.next_page_url" :previous-page-url="users.prev_page_url" />
            </div>
        </div>
    </admin-layout>
</template>