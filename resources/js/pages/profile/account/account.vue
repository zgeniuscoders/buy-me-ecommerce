<script setup lang="ts">
import { ref } from "vue";
import accountLayout from "../layouts/accountLayout.vue"
import orderTable from "@/components/order-table.vue";
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <account-layout>
        <section class="py-2">
            <h1 class="text-xl font-medium p-4">Mes Commandes</h1>

            <order-table :products="$page.props.products.data" />


            <div class="p-4 flex items-center justify-between">
                <template v-if="$page.props.products.next_page_url">
                    <Link :href='$page.props.products.next_page_url'
                        class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
                    Suivant</Link>
                </template>

                <template v-if="$page.props.products.prev_page_url">
                    <Link :href='$page.props.products.prev_page_url'
                        class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
                    Precedent</Link>
                </template>
            </div>

        </section>
    </account-layout>
</template>