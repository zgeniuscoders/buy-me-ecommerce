<script setup lang="ts">

import {LucideCheckCheck, LucideEllipsis} from "lucide-vue-next";
import {Button} from "@/components/ui/button";
import {Message} from "@/models/Message.ts";

const {message, isSender} = defineProps<{
    message: Message,
    isSender: boolean,
}>()
</script>

<template>
    <div class="max-w-screen-sm" :class="`${isSender ? 'self-end' : ''}`">
        <div class="flex items-center gap-2">
            <div
                :class="`${isSender ? '' : 'flex items-center justify-center'}`"
                class="shadow-base rounded-lg border bg-card text-card-foreground relative order-1 "
                v-if="message.file">
                <div class="inline-flex gap-4 p-4">
                    <div class="grid gap-2 grid-cols-2">
                        <figure
                            class="relative cursor-pointer overflow-hidden rounded-lg transition-opacity hover:opacity-90">
                            <img class="aspect-[4/3] object-cover"
                                 :src="message.file"
                                 alt="image"></figure>
                    </div>
                </div>

            </div>
            <div
                :class="`${isSender ? '' : 'flex items-center justify-center relative'}`"
                class="shadow-base rounded-lg border bg-card text-card-foreground order-1"
                v-else>
                <div class="inline-flex p-4">{{ message.message }}</div>
            </div>

            <div :class="`${isSender ? '' : 'order-2'}`">
                <Button variant="link"
                        class="hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    <LucideEllipsis class="h-4 w-4"/>
                </Button>
            </div>
        </div>

        <div class="flex items-center gap-2" :class="`${isSender ? 'justify-end' : ''}`">
            <time class="mt-1 flex items-center text-sm text-muted-foreground">05:23 PM</time>
            <template v-if="isSender">
                <LucideCheckCheck class="h-4 w-4 flex-shrink-0 text-green-500" v-if="message.is_read"/>
                <LucideCheckCheck class="h-4 w-4 flex-shrink-0 text-gray-500" v-else/>
            </template>
        </div>

    </div>
</template>

<style scoped>

</style>
