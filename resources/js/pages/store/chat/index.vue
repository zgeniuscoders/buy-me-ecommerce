<script setup lang="ts">

import Layout from "@/pages/admin/store/layouts/layout.vue";
import UserList from "@/components/chat/user-list.vue";
import ChatFigure from "@/components/chat/chat-figure.vue";
import {usePage} from "@inertiajs/vue3";

const {chatList} = usePage().props

</script>

<template>
    <layout>
        <div class="gap-8 lg:flex">
            <user-list :chatList="chatList"/>
            <chat-figure/>
        </div>
    </layout>
</template>

<style scoped>

</style>
