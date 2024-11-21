<script setup lang="ts">

import {LucideCirclePlus, LucidePaperclip, LucideSmile} from "lucide-vue-next";
import {Button} from "@/components/ui/button";
import {Input} from "@/components/ui/input";
import {useMessage} from "@/composables/useMessage.ts";
import {ref} from "vue";

const {sendMessage} = useMessage()
const message = ref<string>()
const {receiverId} = defineProps<{
    receiverId: number
}>()

const handleSendMessage = () => {
    sendMessage({message: message.value,receiverId: receiverId})
    message.value = ""
}

</script>

<template>
    <div class="shadow-base rounded-lg border bg-card text-card-foreground">
        <div class="relative flex items-center p-2 lg:p-4">
            <Input placeholder="Enter message..." type="text" v-model="message"
                   class="border-transparent pe-32 !text-base !shadow-transparent !ring-transparent lg:pe-56 placeholder:text-muted-foreground focus:border-primary focus-visible:outline-none disabled:cursor-not-allowed"/>
            <div class="absolute end-4 flex items-center">
                <div class="block lg:hidden">
                    <Button class="h-11 w-11 rounded-full p-0" variant="link">
                        <LucideCirclePlus/>
                    </Button>
                </div>
                <div class="hidden lg:block">
                    <Button class="h-11 w-11 rounded-full p-0 hover:bg-accent hover:text-accent-foreground"
                            variant="link">
                        <LucideSmile/>
                    </Button>
                    <Button class="h-11 w-11 rounded-full p-0 hover:bg-accent hover:text-accent-foreground"
                            variant="link">
                        <LucidePaperclip/>
                    </Button>
                </div>
                <Button variant="outline"
                        @click="handleSendMessage"
                        class="hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ms-3">
                    Envoyer
                </Button>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
