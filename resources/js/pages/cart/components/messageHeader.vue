<script setup lang="ts">

import {LucideArrowLeft, LucideEllipsis} from "lucide-vue-next";
import {Button} from "@/components/ui/button";
import {ChatList} from "@/models/ChatList.ts";
import Avatar from "@/components/avatar.vue";

const {user} = defineProps<{
    user: ChatList
}>()
</script>

<template>
    <div class="flex justify-between gap-4">
        <div class="flex gap-4">
            <Button variant="outline" class="flex h-10 w-10 p-0 lg:hidden">
                <LucideArrowLeft/>
            </Button>
            <avatar :name="user.name" :avatar="user.profile" size="h-12 w-12"/>
            <div class="flex flex-col">
                <span class="font-semibold capitalize">{{ user.name }}</span>
                <span class="text-sm text-green-500">Online</span>
            </div>
        </div>
        <div class="flex gap-2">
            <Button class="h-10 w-10 p-0" variant="link">
                <LucideEllipsis/>
            </Button>
        </div>
    </div>
</template>

<style scoped>

</style>
