<script setup lang="ts">

</script>

<template>
    <div class="flex-grow">
        <div class="fixed inset-0 z-50 flex flex-col bg-background p-4 lg:relative lg:bg-transparent lg:p-0">
            <div class="flex justify-between gap-4">
                <div class="flex gap-4">
                    <button
                        class="items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground rounded-md flex h-10 w-10 p-0 lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-arrow-left h-4 w-4">
                            <path d="m12 19-7-7 7-7"></path>
                            <path d="M19 12H5"></path>
                        </svg>
                    </button>
                    <span class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                        class="aspect-square h-full w-full" alt="avatar image"
                        src="https://dashboard.shadcnuikit.com//images/avatars/2.png"><div
                        class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                    <div class="flex flex-col"><span class="font-semibold">Nickola Peever</span><span
                        class="text-sm text-green-500">Online</span></div>
                </div>
                <div class="flex gap-2">
                    <div class="hidden lg:flex lg:gap-2">
                        <div data-state="closed">
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                                type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1r:"
                                data-state="closed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-video h-4 w-4">
                                    <path
                                        d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path>
                                    <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                </svg>
                            </button>
                        </div>
                        <div data-state="closed">
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                                type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1v:"
                                data-state="closed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-phone-call h-4 w-4">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    <path d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                                    <path d="M14.05 6A5 5 0 0 1 18 10"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground rounded-md h-10 w-10 p-0"
                        type="button" id="radix-:r22:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-ellipsis h-4 w-4">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                        </svg>
                    </button>
                </div>
            </div>
            <div dir="ltr" class="overflow-hidden relative h-screen w-full py-4 lg:h-[calc(100vh_-_13.8rem)]"
                 style="position: relative; --radix-scroll-area-corner-width: 0px; --radix-scroll-area-corner-height: 0px;">
                <div data-radix-scroll-area-viewport="" class="h-full w-full rounded-[inherit]"
                     style="overflow: hidden scroll;">
                    <div data-radix-scroll-area-content="">
                        <div>
                            <div class="flex flex-col items-start space-y-10 py-8">
                                <div class="max-w-screen-sm self-end">
                                    <div class="flex items-center gap-2">
                                        <div class="shadow-base rounded-lg border bg-card text-card-foreground order-1">
                                            <div class="inline-flex p-4">Sorry :( send you as soon as possible.</div>
                                        </div>
                                        <div class="">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                                                type="button" id="radix-:r24:" aria-haspopup="menu"
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
                                    <div class="flex items-center gap-2 justify-end">
                                        <time class="mt-1 flex items-center text-sm text-muted-foreground justify-end">
                                            05:23 PM
                                        </time>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                            <path d="M18 6 7 17l-5-5"></path>
                                            <path d="m22 10-7.5 7.5L13 16"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="max-w-screen-sm">
                                    <div class="flex items-center gap-2">
                                        <div class="shadow-base rounded-lg border bg-card text-card-foreground">
                                            <div class="inline-flex p-4">I know how important this file is to you. You
                                                can trust me ;) I know how important this file is to you. You can trust
                                                me ;) know how important this file is to you. You can trust me ;)
                                            </div>
                                        </div>
                                        <div class="order-2">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                                                type="button" id="radix-:r26:" aria-haspopup="menu"
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
                                    <div class="flex items-center gap-2">
                                        <time class="mt-1 flex items-center text-sm text-muted-foreground">05:23 PM
                                        </time>
                                    </div>
                                </div>
                                <div class="max-w-screen-sm self-end">
                                    <div class="flex items-center gap-2">
                                        <div class="shadow-base rounded-lg border bg-card text-card-foreground order-1">
                                            <div class="inline-flex p-4">I know how important this file is to you. You
                                                can trust me ;) me ;)
                                            </div>
                                        </div>
                                        <div class="">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                                                type="button" id="radix-:r28:" aria-haspopup="menu"
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
                                    <div class="flex items-center gap-2 justify-end">
                                        <time class="mt-1 flex items-center text-sm text-muted-foreground justify-end">
                                            05:23 PM
                                        </time>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                            <path d="M18 6 7 17l-5-5"></path>
                                            <path d="m22 10-7.5 7.5L13 16"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="max-w-screen-sm self-end">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="shadow-base rounded-lg border bg-card text-card-foreground relative order-1 flex items-center justify-center">
                                            <div class="inline-flex gap-4 p-4">
                                                <div class="grid gap-2 grid-cols-2">
                                                    <figure
                                                        class="relative cursor-pointer overflow-hidden rounded-lg transition-opacity hover:opacity-90">
                                                        <img class="aspect-[4/3] object-cover"
                                                             src="https://dashboard.shadcnuikit.com//images/chats/image4.jpg"
                                                             alt="image"></figure>
                                                    <figure
                                                        class="relative cursor-pointer overflow-hidden rounded-lg transition-opacity hover:opacity-90">
                                                        <img class="aspect-[4/3] object-cover"
                                                             src="https://dashboard.shadcnuikit.com//images/chats/image3.jpg"
                                                             alt="image"></figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                                                type="button" id="radix-:r2a:" aria-haspopup="menu"
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
                                    <div class="flex items-center gap-2 justify-end">
                                        <time class="mt-1 flex items-center text-sm text-muted-foreground justify-end">
                                            05:23 PM
                                        </time>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                            <path d="M18 6 7 17l-5-5"></path>
                                            <path d="m22 10-7.5 7.5L13 16"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow-base rounded-lg border bg-card text-card-foreground">
                <div class="relative flex items-center p-2 lg:p-4"><input
                    class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus:border-primary focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 border-transparent pe-32 !text-base !shadow-transparent !ring-transparent lg:pe-56"
                    placeholder="Enter message..." type="text">
                    <div class="absolute end-4 flex items-center">
                        <div class="block lg:hidden">
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-11 w-11 rounded-full p-0"
                                type="button" id="radix-:r2c:" aria-haspopup="menu" aria-expanded="false"
                                data-state="closed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-circle-plus h-4 w-4">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 12h8"></path>
                                    <path d="M12 8v8"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="hidden lg:block">
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-11 w-11 rounded-full p-0"
                                data-state="closed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-smile h-4 w-4">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                    <line x1="9" x2="9.01" y1="9" y2="9"></line>
                                    <line x1="15" x2="15.01" y1="9" y2="9"></line>
                                </svg>
                            </button>
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-11 w-11 rounded-full p-0"
                                data-state="closed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-paperclip h-4 w-4">
                                    <path
                                        d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                </svg>
                            </button>
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-11 w-11 rounded-full p-0"
                                data-state="closed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-mic h-4 w-4">
                                    <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                                    <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                    <line x1="12" x2="12" y1="19" y2="22"></line>
                                </svg>
                            </button>
                        </div>
                        <button
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ms-3">
                            Send
                        </button>
                    </div>
                </div>
            </div>
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
