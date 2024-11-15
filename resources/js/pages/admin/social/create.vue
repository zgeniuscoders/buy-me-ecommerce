<script setup lang="ts">

import AdminLayout from "@/pages/admin/layouts/adminLayout.vue";
import {useForm, usePage} from "@inertiajs/vue3";
import {createToaster} from "@meforma/vue-toaster";
import {Button} from "@/components/ui/button";
import {Label} from "@/components/ui/label";
import {Input} from "@/components/ui/input";
import {Card, CardContent, CardHeader, CardTitle} from "@/components/ui/card";

const toaster = createToaster();

const {createSocialRoute} = usePage().props

const form = useForm({
    name: "",
    image: null,
    link: ""
})

const submit = () => {
    form.post(createSocialRoute, {
        onError: () => {
            toaster.error("Error")
        },
        onSuccess: () => {
            toaster.success("Success")
        },
    })
}


</script>

<template>
    <admin-layout>
        <div class="container max-w-screen-lg">
            <div class="space-y-4">
                <form action="">
                    <div class="mb-4 flex items-center justify-between space-y-2">
                        <h1 class="text-2xl font-bold tracking-tight">Ajout d'un role</h1>
                        <div class="flex gap-2">
                            <Button @click.prevent="submit">Publier</Button>
                        </div>
                    </div>
                    <div class="space-y-4">

                        <card>

                            <CardHeader>
                                <CardTitle>Informations générales du role</CardTitle>
                            </CardHeader>
                            <CardContent class="space-y-4">
                                <div class="space-y-4">
                                    <Label for="name">Nom du role</Label>
                                    <Input placeholder="Nom du role" v-model="form.name" id="name"/>
                                    <span v-if="form.errors.name" class="text-red-400 text-sm">{{
                                            form.errors.name
                                        }}</span>
                                </div>
                                <div class="space-y-4">
                                    <Label for="link">Lien</Label>
                                    <Input placeholder="https:\\lienpage.com" v-model="form.link" id="link" type="url"/>
                                    <span v-if="form.errors.link" class="text-red-400 text-sm">{{
                                            form.errors.link
                                        }}</span>
                                </div>
                            </CardContent>
                        </card>
                        <Card>
                            <CardHeader>
                                <CardTitle>
                                    Images
                                </CardTitle>
                            </CardHeader>
                            <CardContent>

                                <div>
                                    <div
                                        class="flex h-40 items-center justify-center rounded-lg border-2 border-dashed">
                                        <label for="dropzone-file"
                                               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                                               type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="lucide lucide-upload me-2 h-3 w-3">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="17 8 12 3 7 8"></polyline>
                                                <line x1="12" x2="12" y1="3" y2="15"></line>
                                            </svg>
                                            Browse image
                                        </label>
                                        <input id="dropzone-file" type="file" class="hidden"
                                               @input="form.image = $event.target.files[0]"
                                               accept="image/jpeg,image/png"/>
                                    </div>
                                    <span v-if="form.errors.image" class="text-red-400 text-sm">{{
                                            form.errors.image
                                        }}</span>
                                </div>

                            </CardContent>
                        </Card>

                    </div>
                </form>
            </div>
        </div>
    </admin-layout>
</template>

<style scoped>

</style>
