<script setup lang="ts">

import {User} from "@/models/User.ts";
import {CardContent, Card, CardFooter, CardHeader, CardTitle} from "@/components/ui/card";
import {Button} from "@/components/ui/button";
import {ScrollArea} from '@/components/ui/scroll-area'
import {Separator} from '@/components/ui/separator'
import {Input} from '@/components/ui/input'
import {Search} from 'lucide-vue-next'
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
import {Command, CommandEmpty, CommandGroup, CommandInput, CommandItem, CommandList} from "@/components/ui/command";

interface ChatList {
    id: number,
    user: User,
    last_message: string,
    is_media: boolean
}

const {chatList} = defineProps<{
    chatList: ChatList
}>()

</script>

<template>
    <div class="w-full lg:w-96">
        <Dialog>
            <DialogTrigger as-child>
                <Card>
                    <CardHeader>
                        <div class="flex items-center justify-between">
                            <CardTitle>Messages</CardTitle>
                            <Button variant="outline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="lucide lucide-circle-plus w-4 h-4 me-2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 12h8"></path>
                                    <path d="M12 8v8"></path>
                                </svg>
                                New
                            </Button>
                        </div>
                    </CardHeader>
                    <CardContent>
                        <div class="relative w-full max-w-sm items-center">
                            <Input id="search" type="text" placeholder="Search..." class="pl-10"/>
                            <span class="absolute start-0 inset-y-0 flex items-center justify-center px-2">
                      <Search class="size-6 text-muted-foreground"/>
                    </span>
                        </div>
                        <ScrollArea class="lg:h-[calc(100vh_-_15.8rem)]">

                            <div>
                                <template v-for="chat in chatList" :key="chat.id">
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border">
                                            <img class="aspect-square h-full w-full"
                                                 :alt="`photo de profile de ${chat.user.name}`"
                                                 :src="chat.user.profile" v-if="chat.user.profile">
                                            <span
                                                class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></span>
                                        </span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between">
                                                <span class="font-semibold capitalize">{{ chat.user.name }}</span>
                                                <span class="text-sm text-muted-foreground">10 minutes</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check h-4 w-4 flex-shrink-0 text-muted-foreground">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                <span
                                                    class="truncate text-start text-muted-foreground">{{ chat.last_message }}</span>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-ellipsis h-4 w-4">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </template>
                                <Separator class="my-2"/>
                            </div>

                        </ScrollArea>
                    </CardContent>
                </Card>
            </DialogTrigger>
            <DialogContent class="sm:max-w-[500px]">
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
