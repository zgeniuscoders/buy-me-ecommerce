<script setup lang="ts">

import { useForm } from '@inertiajs/vue3';
import accountLayout from '../layouts/accountLayout.vue';

const form = useForm({
    productId: 0
})


const deleteProductFromFavorite = (id: number) => {
    form.productId = id
    form.delete('/mon-compte/articles-favorite/' + id, {
        onError: (e) => {
            console.error(e);
            
        },
        onSuccess: () => {

        }
    })
}

</script>

<template>

    <account-layout>
        <section class="py-2">
            <h1 class="text-xl font-medium p-4">Mes articles favorite</h1>

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
                            Nom de l'article
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prix
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <template v-for="product in $page.props.products" :key="product.id">

                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ product.name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ product.price }}$
                            </td>

                            <td class="px-6 py-4">

                                <form action="" method="post">
                                    <button type="button" @click.prevent="deleteProductFromFavorite(product.id)"
                                        class="font-medium text-error dark:text-error hover:underline">
                                        Supprimer
                                    </button>
                                </form>

                            </td>
                        </tr>

                    </template>

                </tbody>
            </table>

        </section>
    </account-layout>

</template>
