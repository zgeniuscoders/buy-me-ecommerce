<script setup lang="ts">

import Layout from "@/pages/admin/store/layouts/layout.vue";
import UserList from "@/components/chat/user-list.vue";
import ChatFigure from "@/components/chat/chat-figure.vue";
</script>

<template>
    <layout>
        <div>
            <user-list/>
            <chat-figure/>
        </div>
    </layout>
</template>

<style scoped>

</style>
