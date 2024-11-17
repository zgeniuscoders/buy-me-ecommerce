<script setup lang="ts">


import {Category} from "@/models/ProductType.ts";
import {ref} from "vue";

const {categories} = defineProps<{
    categories: Category[]
}>()

const isCategoryShow = ref(true)

</script>

<template>
    <div>
        <template v-for="category in categories" :key="category.id">
<!--            <nav-items-dropdown :is-showing="isCategoryShow" :nav-title="category.name">-->
<!--                <template v-for="subCategory in category.categories" :key="subCategory.id">-->
<!--                    <a :href="`/articles?category=${subCategory.name}`">{{ subCategory.name }}</a>-->
<!--                </template>-->
<!--            </nav-items-dropdown>-->
        </template>

    </div>
</template>

<style scoped>

</style>
