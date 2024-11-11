<script setup lang="ts">

import { usePage, Link } from '@inertiajs/vue3';
import adminLayout from '../layouts/adminLayout.vue';
import { onMounted, ref } from 'vue';
import sortCard from '@/components/sort-card.vue';

const {users} = usePage().props

</script>

<template>

    <admin-layout>

    </admin-layout>
</template>
