<script setup lang="ts">

import {CardContent, Card, CardHeader} from "@/components/ui/card";
import {Input} from '@/components/ui/input'
import {Label} from '@/components/ui/label'
import {Button} from '@/components/ui/button'
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/components/ui/dialog'

import {
    Command,
    CommandEmpty,
    CommandGroup,
    CommandInput,
    CommandItem,
    CommandList,
    CommandSeparator,
    CommandShortcut,
} from '@/components/ui/command'

</script>

<template>
    <div>
        <Dialog>
            <DialogTrigger as-child>
                <Card>
                    <CardHeader>
                        <div class="space-y-1.5 p-6 flex flex-row items-center">
                            <div class="flex items-center space-x-4"><span
                                class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><img
                                class="aspect-square h-full w-full"
                                src="https://dashboard.shadcnuikit.com/images/avatars/4.png"></span>
                                <div><p class="text-sm font-medium leading-none">Sofia Davis</p>
                                    <p class="text-sm text-muted-foreground">m@example.com</p></div>
                            </div>
                            <Button
                                class="inline-flex items-center text-primary justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 ml-auto rounded-full"
                                data-state="closed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-plus h-4 w-4">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                                <span class="sr-only">New message</span>
                            </Button>
                        </div>
                    </CardHeader>
                    <CardContent>
                        <div class="p-6 pt-0">
                            <div class="space-y-4">
                                <div
                                    class="flex w-max max-w-[75%] flex-col gap-2 rounded-lg px-3 py-2 text-sm bg-muted">
                                    Hi,
                                    how can I help you today?
                                </div>
                                <div
                                    class="flex w-max max-w-[75%] flex-col gap-2 rounded-lg px-3 py-2 text-sm ml-auto bg-primary text-primary-foreground">
                                    Hey, I'm having trouble with my account.
                                </div>
                                <div
                                    class="flex w-max max-w-[75%] flex-col gap-2 rounded-lg px-3 py-2 text-sm bg-muted">
                                    What seems to be the problem?
                                </div>
                                <div
                                    class="flex w-max max-w-[75%] flex-col gap-2 rounded-lg px-3 py-2 text-sm ml-auto bg-primary text-primary-foreground">
                                    I can't log in.
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center p-6 pt-0">
                            <form class="flex w-full items-center space-x-2"><input
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus:border-primary focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 flex-1"
                                id="message" placeholder="Type your message..." autocomplete="off" value="">
                                <button
                                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 w-10"
                                    type="submit" disabled="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-send h-4 w-4">
                                        <path d="m22 2-7 20-4-9-9-4Z"></path>
                                        <path d="M22 2 11 13"></path>
                                    </svg>
                                    <span class="sr-only">Send</span></button>
                            </form>
                        </div>
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

</style>
