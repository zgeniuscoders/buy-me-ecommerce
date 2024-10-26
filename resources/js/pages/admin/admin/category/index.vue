<script setup lang="ts">

import adminLayout from '../../layouts/adminLayout.vue';
import { Link, useForm } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster();

const deleteCategory = (id: number) => {
    let isDeleted = confirm("voulez-vous vraiment supprimer cette category ?")
    if (isDeleted) {
        useForm({}).delete("/admin/categories/" + id, {
            onError: (e) => {
                toaster.error("une erreur se produite lors de la suppression de la category")
            },
            onSuccess: () => {
                toaster.success("la supression a ete effectuer avec success")
            }
        })
    }
}

</script>


<template>

    <admin-layout>

        <section class="py-2">
            <div class="flex items-center justify-between p-4">
                <h1 class="text-xl font-medium">Categories</h1>
                <Link href='/admin/categories/create'
                    class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-4 focus:ring-primary">Ajouter une categorie</Link>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <!-- <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th> -->
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Slug
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <template v-for="category in $page.props.categories.data" :key="category.id">

                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ category.name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ category.slug }}
                            </td>

                            <td class="px-6 py-4 md:flex md:items-center md:gap-4">

                                <form action="" method="post">
                                    <button type="button" @click.prevent="deleteCategory(category.id)"
                                        class="font-medium text-error dark:text-error hover:underline">
                                        Supprimer
                                    </button>
                                </form>

                                <Link :href="`/admin/categories/${category.id}/edit`" class="text-primary">
                                <span>Modifier</span>
                                </Link>
                            </td>
                        </tr>

                    </template>

                </tbody>
            </table>


            <div class="p-4 flex items-center justify-between">
                <template v-if="$page.props.categories.next_page_url">
                    <Link :href='$page.props.categories.next_page_url'
                        class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
                    Suivant</Link>
                </template>

                <template v-if="$page.props.categories.prev_page_url">
                    <Link :href='$page.props.categories.prev_page_url'
                        class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
                    Precedent</Link>
                </template>
            </div>

        </section>

    </admin-layout>

</template>