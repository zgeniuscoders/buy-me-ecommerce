<template>
    <Layout>
 
        <section class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">

            <h3 class="text-2xl mb-4 mt-2 font-medium">Mes articles</h3>


            <div
                class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <product-dropdown-filter/>

                <product-search-box/>
            </div>

            <product-table :products="$page.props.products.data"/>
        </section>

    </Layout>
</template>

<script setup>

import Layout from "../../layouts/layout.vue";
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";
import ProductTable from "./components/product-table.vue";
import ProductSearchBox from "./components/product-search-box.vue";
import ProductDropdownFilter from "./components/product-dropdown-filter.vue";


const cat = ref([
    {
        id: 1,
        name: "Electronics"
    },
    {
        id: 2,
        name: "Clothing"
    }
])

const form = useForm({
    name: null,
    description: null,
    price: null,
    image: null,
    category: null,
    qty: null,
    status: null,
    barcode: null
})

</script>

<style scoped>

</style>
