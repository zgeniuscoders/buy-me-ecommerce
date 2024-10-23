<script setup>

import Layout from "../../layouts/layout.vue";
import OrderTable from "./components/order-table.vue"
</script>

<template>
    <Layout>
        <section class="p-4">

            <order-table :products="$page.props.orders" />

        </section>

    </Layout>
</template>

<style scoped></style>
