<script setup lang="ts">

import {ScrollArea} from "@/components/ui/scroll-area";
import {onMounted, watch} from "vue";
import {useMessage} from "@/composables/useMessage.ts";
import MessageItem from "@/pages/cart/components/messageItem.vue";
import MessageFooter from "@/pages/cart/components/messageFooter.vue";
import MessageHeader from "@/pages/cart/components/messageHeader.vue";
import {ChatList} from "@/models/ChatList.ts";

const {messages, getMessages} = useMessage()
const props = defineProps<{
    user: ChatList
}>()


watch(() => props.user, (newUser: ChatList,oldUser: ChatList) => {
    if (newUser?.id !== oldUser?.id){
        getMessages(newUser.id)
    }
})

onMounted(() => {
    getMessages(props.user.id)
})

</script>

<template>
    <div class="flex-grow mt-4">
        <div class="fixed inset-0 z-50 flex flex-col bg-background p-4 lg:relative lg:bg-transparent lg:p-0">
            <message-header :user="props.user"/>
            <ScrollArea class="overflow-hidden relative h-screen w-full py-4 lg:h-[calc(100vh_-_13.8rem)]" dir="ltr">
                <div class="flex flex-col items-start space-y-10 py-8 px-4">

                    <template v-for="message in messages" :key="message.id">
                        <message-item :message="message" v-if="message.sender_id == 2" :isSender="true"/>
                        <message-item :message="message" v-else :isSender="false"/>
                    </template>

                </div>
            </ScrollArea>

            <message-footer :receiver-id="props.user.id"/>
        </div>
    </div>
</template>

<style scoped>
[data-radix-scroll-area-viewport] {
    scrollbar-width: none;
    -ms-overflow-style: none;
    -webkit-overflow-scrolling: touch;
}

[data-radix-scroll-area-viewport]::-webkit-scrollbar {
    display: none;
}

:where([data-radix-scroll-area-viewport]) {
    display: flex;
    flex-direction: column;
    align-items: stretch;
}

:where([data-radix-scroll-area-content]) {
    flex-grow: 1;
}
</style>
