<script setup>

import Layout from "../../layouts/layout.vue";
import orderTable from "@/components/order-table.vue";
import sortCard from "@/components/sort-card.vue";

</script>

<template>
    <Layout>
        <section class="p-4">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <sort-card />
                <order-table :products="$page.props.orders" />
            </div>


        </section>

    </Layout>
</template>

<style scoped></style>
