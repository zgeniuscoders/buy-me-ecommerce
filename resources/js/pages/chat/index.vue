<script setup lang="ts">

import ChatFigure from "@/components/chat/chat-figure.vue";
import {usePage} from "@inertiajs/vue3";
import UserList from "@/components/chat/user-list.vue";
import {onMounted, reactive, ref, watch} from "vue";
import ChatMessages from "@/components/chat/chat-messages.vue";
import {useColorMode} from "@vueuse/core";
import {User} from "@/models/User.ts";
import {ChatList} from "@/models/ChatList.ts";

const mode = useColorMode()

const {chatList} = usePage().props
const state = reactive<{
    hasSelectedUser: boolean,
    selectedUser: ChatList | null
}>({
    hasSelectedUser: false,
    selectedUser: null
})

const handleSelectedUserChange = (user: ChatList) => {
    state.hasSelectedUser = true
    state.selectedUser = user
}



</script>

<template>
    <div class="gap-8 lg:flex h-screen">
        <user-list :chatList="chatList" @selectedUser="handleSelectedUserChange"/>
        <chat-messages v-if="state.hasSelectedUser" :user="state.selectedUser"/>
        <chat-figure v-else/>
    </div>
</template>

<style scoped>

</style>
