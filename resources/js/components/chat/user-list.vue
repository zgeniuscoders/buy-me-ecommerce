<script setup lang="ts">

</script>

<template>
    <div class="w-full lg:w-96">
        <div class="shadow-base rounded-lg border bg-card text-card-foreground">
            <div class="flex flex-col space-y-1.5 p-6 py-4 lg:py-6">
                <div class="flex items-center justify-between"><h3
                    class="text-lg leading-none tracking-tight font-bold">Chats</h3>
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                        type="button" id="radix-:ru:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-circle-plus w-4 h-4 me-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 12h8"></path>
                            <path d="M12 8v8"></path>
                        </svg>
                        New
                    </button>
                </div>
            </div>
            <div class="p-0">
                <div class="relative flex items-center px-6 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-search absolute start-10 h-4 w-4 text-muted-foreground">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input
                        class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus:border-primary focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 ps-10"
                        placeholder="Chats search..." type="text"></div>
                <div class="flex h-[calc(100vh_-_13rem)] lg:h-[calc(100vh_-_15.8rem)] lg:pt-4">
                    <div dir="ltr" class="relative overflow-hidden w-full min-w-0"
                         style="position: relative; --radix-scroll-area-corner-width: 0px; --radix-scroll-area-corner-height: 0px;">

                        <div data-radix-scroll-area-viewport="" class="h-full w-full rounded-[inherit]"
                             style="overflow: hidden scroll;">
                            <div data-radix-scroll-area-content="">
                                <div class="block min-w-0 divide-y">
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/1.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span class="font-semibold">Jacquenetta Slowgrave</span><span
                                                class="text-sm text-muted-foreground">10 minutes</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check h-4 w-4 flex-shrink-0 text-muted-foreground">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">Great! Looking forward to it. See you later!</span>
                                                <div
                                                    class="ms-auto flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-green-500 text-sm text-white">
                                                    8
                                                </div>
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/2.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Nickola Peever</span><span
                                                class="text-sm text-muted-foreground">40 minutes</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">Sounds perfect! I've been wanting to try that place. See you there!</span>
                                                <div
                                                    class="ms-auto flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-green-500 text-sm text-white">
                                                    2
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r12:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div><span
                                            class="flex h-full w-full items-center justify-center rounded-full bg-muted">F</span></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Farand Hume</span><span
                                                class="text-sm text-muted-foreground">Yesterday</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">How about 7 PM at the new Italian place downtown?</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r14:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/4.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Ossie Peasey</span><span
                                                class="text-sm text-muted-foreground">13 days</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check h-4 w-4 flex-shrink-0 text-muted-foreground">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">Hey Bonnie, yes, definitely! What time should we meet?</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r16:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/5.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Hall Negri</span><span
                                                class="text-sm text-muted-foreground">2 days</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-muted-foreground">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">No worries at all! I’ll grab a table and wait for you. Drive safe!</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r18:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/6.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Elyssa Segot</span><span
                                                class="text-sm text-muted-foreground">Yesterday</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">She just told me today.</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r1a:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/7.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Gil Wilfing</span><span
                                                class="text-sm text-muted-foreground">1 day</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check h-4 w-4 flex-shrink-0 text-muted-foreground">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">See you in 5 minutes!</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r1c:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/8.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Bab Cleaton</span><span
                                                class="text-sm text-muted-foreground">3 hours</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-muted-foreground">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">If it takes long you can mail</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r1e:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/9.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Janith Satch</span><span
                                                class="text-sm text-muted-foreground">1 day</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">Absolutely! It’s amazing to see her so happy and passionate about it.</span>
                                                <div
                                                    class="ms-auto flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-green-500 text-sm text-white">
                                                    2
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r1g:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/10.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Biron Alison</span><span
                                                class="text-sm text-muted-foreground">1 day</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">Yeah, she mentioned it last week.</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r1i:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/11.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span
                                                class="font-semibold">Baily Younie</span><span
                                                class="text-sm text-muted-foreground">Yesterday</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check h-4 w-4 flex-shrink-0 text-muted-foreground">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">Thanks, I appreciate it! </span>
                                                <div
                                                    class="ms-auto flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-green-500 text-sm text-white">
                                                    2
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r1k:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><img
                                            class="aspect-square h-full w-full" alt="avatar image"
                                            src="https://dashboard.shadcnuikit.com//images/avatars/12.png"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span class="font-semibold">Lawton Broadbury</span><span
                                                class="text-sm text-muted-foreground">1 hours</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span
                                                    class="truncate text-start text-muted-foreground">Drive safe!</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r1m:" aria-haspopup="menu"
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
                                    <div
                                        class="group relative flex min-w-0 cursor-pointer items-center gap-4 px-6 py-4 hover:bg-muted">
                                        <span
                                            class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 border"><div
                                            class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400"></div><span
                                            class="flex h-full w-full items-center justify-center rounded-full bg-muted">E</span></span>
                                        <div class="min-w-0 flex-grow">
                                            <div class="flex justify-between"><span class="font-semibold">Ealasaid Bohlje</span><span
                                                class="text-sm text-muted-foreground">10 days</span></div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-check-check h-4 w-4 flex-shrink-0 text-green-500">
                                                    <path d="M18 6 7 17l-5-5"></path>
                                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                                </svg>
                                                <span class="truncate text-start text-muted-foreground">I might be 10 minutes late. Sorry!</span>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute bottom-0 end-0 top-0 flex items-center bg-gradient-to-l from-50% px-4 opacity-0 group-hover:opacity-100 from-muted">
                                            <button
                                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full p-0"
                                                type="button" id="radix-:r1o:" aria-haspopup="menu"
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
                                </div>
                            </div>
                        </div>
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
