<script setup lang="ts">

import {CardContent, Card, CardHeader, CardTitle} from "@/components/ui/card";
import {Button} from "@/components/ui/button";
import {ScrollArea} from '@/components/ui/scroll-area'
import {Separator} from '@/components/ui/separator'
import {Input} from '@/components/ui/input'
import {Badge} from '@/components/ui/badge'
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger
} from "@/components/ui/dialog";
import {
    Command,
    CommandEmpty,
    CommandGroup,
    CommandInput,
    CommandItem,
    CommandList
} from "@/components/ui/command";
import {LucideCheck, LucideEllipsis, LucideCirclePlus, Search} from "lucide-vue-next";
import {timeAgo} from "@/lib/utils.ts";
import {ChatList} from "@/models/ChatList.ts";

const {chatList} = defineProps<{
    chatList: ChatList[]
}>()



</script>

<template>
    <div class="w-full lg:w-96 h-full">
        <Card>
            <CardHeader>
                <div class="flex items-center justify-between">
                    <CardTitle>Messages</CardTitle>
                    <Dialog>
                        <DialogTrigger as-child>
                            <Button variant="outline">
                                <LucideCirclePlus class="w-4 h-4 me-2"/>
                                Nouveau
                            </Button>
                        </DialogTrigger>
                        <DialogContent>
                            <DialogHeader>
                                <DialogTitle>Nouveau message</DialogTitle>
                                <DialogDescription>
                                    Invite a user to this thread. This will create a new group message.
                                </DialogDescription>
                            </DialogHeader>
                            <Command>
                                <CommandInput placeholder="Entre l'e-mail du client ou son nom..."/>
                                <CommandList>
                                    <CommandEmpty>No results found.</CommandEmpty>
                                    <CommandGroup heading="Suggestions">
                                        <CommandItem value="Users">
                                <span
                                    class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full">
                                        <img
                                            class="aspect-square h-full w-full" alt="Image"
                                            src="https://dashboard.shadcnuikit.com/images/avatars/4.png">
                                    </span>
                                            <div class="ml-2">
                                                <p class="text-sm font-medium leading-none">William Kim</p>
                                                <p class="text-sm text-muted-foreground">will@email.com</p>
                                            </div>
                                        </CommandItem>
                                    </CommandGroup>
                                </CommandList>
                            </Command>
                            <DialogFooter>
                                <Button type="submit">
                                    Save changes
                                </Button>
                            </DialogFooter>
                        </DialogContent>
                    </Dialog>
                </div>
            </CardHeader>
            <CardContent class="p-0">
                <div class="px-4 mb-2">
                    <div class="relative w-full max-w-sm items-center">
                        <Input id="search" type="text" placeholder="Search..." class="pl-10"/>
                        <span class="absolute start-0 inset-y-0 flex items-center justify-center px-2">
                        <Search class="size-6 text-muted-foreground"/>
                    </span>
                    </div>
                </div>
                <ScrollArea class="lg:h-[calc(100vh_-_9.9rem)]">

                    <div class="block min-w-0">
                        <template v-for="user in chatList" :key="user.id">
                            <div
                                @click="$emit('selectedUser', user)"
                                class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-4 py-2 hover:bg-muted">
                                <span
                                    class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border">
                                    <img class="aspect-square h-full w-full"
                                         :alt="`photo de profile de ${user.name}`"
                                         :src="user.profile" v-if="user.profile">
                                    <div class="aspect-square h-full w-full grid items-center justify-center" v-else>
                                        <span class="font-medium">{{ user?.name?.charAt(0) }}</span>
                                    </div>
                                    <span
                                        class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></span>
                                </span>
                                <div class="min-w-0 flex-grow">
                                    <div class="flex justify-between">
                                        <span class="font-semibold capitalize">{{ user.name }}</span>
                                        <span class="text-sm text-muted-foreground">{{timeAgo(user.messages[0]?.created_at) }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">

                                        <span v-if="user.messages[0]?.is_read">vu</span>
                                        <LucideCheck class="h-4 w-4 flex-shrink-0 text-muted-foreground" v-else/>

                                        <span class="truncate text-start text-muted-foreground">{{
                                                user.messages[0]?.message
                                            }}</span>
                                        <Badge variant="destructive">
                                            8
                                        </Badge>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                        type="button" id="radix-:r10:" aria-haspopup="menu"
                                        aria-expanded="false" data-state="closed">
                                        <LucideEllipsis class="h-4 w-4"/>
                                    </button>
                                </div>
                            </div>
                            <Separator class=""/>

                        </template>
                    </div>

                </ScrollArea>
            </CardContent>
        </Card>
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
