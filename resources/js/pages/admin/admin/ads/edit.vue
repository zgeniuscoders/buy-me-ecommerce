<script setup lang="ts">
import AdminLayout from "@/pages/admin/admin/layouts/adminLayout.vue";
import {Button} from "@/components/ui/button";
import {CardTitle, Card, CardHeader, CardContent, CardFooter, CardDescription} from "@/components/ui/card";
import {Calendar} from '@/components/ui/calendar'
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import TextArea from '@/components/ui/textarea/Textarea.vue'
import {useForm, usePage} from "@inertiajs/vue3";
import {createToaster} from "@meforma/vue-toaster";
import {type DateValue, getLocalTimeZone, today} from '@internationalized/date'
import {onMounted, type Ref, ref} from 'vue'

const startAt = ref(today(getLocalTimeZone())) as Ref<DateValue>
const endAt = ref(today(getLocalTimeZone())) as Ref<DateValue>

const toaster = createToaster();

const {updateAdsRoute,ads} = usePage().props
const adsForm = useForm({
    title: "",
    description: "",
    sub_title: "",
    image: null,
    button_text: "",
    start_at: "",
    end_at: "",
    url: ""
})


onMounted((() => {

    adsForm.title = ads.title
    adsForm.description = ads.description
    adsForm.sub_title = ads.sub_title
    adsForm.image = ads.image
    adsForm.button_text = ads.button_text
    adsForm.url = ads.url


}))

const update = () => {
    adsForm.start_at = startAt.value.toString()
    adsForm.end_at = endAt.value.toString()
    adsForm.put(updateAdsRoute, {
        onError: () => {
            toaster.error("error")
        },
        onSuccess: () => {
            toaster.success("success")
            adsForm.reset()
        }
    })
}

</script>

<template>
    <admin-layout>
        <section class="container max-w-screen-lg">
            <div class="mb-4 flex items-center justify-between space-y-2">
                <h1 class="text-2xl font-bold tracking-tight">Mettre à jour une publicite</h1>
                <div class="flex gap-2">
                    <Button @click="update">Mettre à jour</Button>
                </div>
            </div>
            <form action="">
                <div class="grid md:grid-cols-6 gap-4">
                    <div class="md:col-span-4 space-y-4">
                        <Card>
                            <CardHeader>
                                <CardTitle>Publicite</CardTitle>
                            </CardHeader>
                            <CardContent class="space-y-2">
                                <div>
                                    <Label for="title">Titre</Label>
                                    <Input v-model="adsForm.title" placeholder="Titre" id="title"/>
                                    <span v-if="adsForm.errors.title" class="text-red-400 text-sm">{{
                                            adsForm.errors.title
                                        }}</span>
                                </div>
                                <div>
                                    <Label for="sub_title">Sous Titre</Label>
                                    <Input v-model="adsForm.sub_title" placeholder="Sous Titre" id="sub_title"/>
                                    <span v-if="adsForm.errors.sub_title" class="text-red-400 text-sm">{{
                                            adsForm.errors.sub_title
                                        }}</span>
                                </div>
                            </CardContent>
                        </Card>
                        <Card>
                            <CardHeader>
                                <CardTitle>Publicite</CardTitle>
                            </CardHeader>
                            <CardContent class="space-y-2">
                                <div>
                                    <Label for="description">Contenu</Label>
                                    <TextArea v-model="adsForm.description" placeholder="Description"
                                              id="description"></TextArea>
                                    <span v-if="adsForm.errors.description" class="text-red-400 text-sm">{{
                                            adsForm.errors.description
                                        }}</span>
                                </div>
                            </CardContent>
                        </Card>
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
                                               @input="adsForm.image = $event.target.files[0]"
                                               accept="image/jpeg,image/png"/>
                                    </div>
                                    <span v-if="adsForm.errors.image" class="text-red-400 text-sm">{{
                                            adsForm.errors.image
                                        }}</span>
                                </div>

                            </CardContent>
                        </Card>
                    </div>
                    <div class="md:col-span-2 space-y-4">
                        <Card>
                            <CardHeader>
                                <CardTitle>Publicite</CardTitle>
                            </CardHeader>
                            <CardContent class="space-y-2">
                                <div>
                                    <Label for="url">Lien de la publicite</Label>
                                    <Input v-model="adsForm.url" placeholder="url" id="url" type="url"/>
                                    <span v-if="adsForm.errors.url" class="text-red-400 text-sm">{{
                                            adsForm.errors.url
                                        }}</span>
                                </div>
                                <div>
                                    <Label for="url">Titre du bouton</Label>
                                    <Input v-model="adsForm.button_text" placeholder="titre du bouton" id="url"/>
                                    <span v-if="adsForm.errors.button_text" class="text-red-400 text-sm">{{
                                            adsForm.errors.button_text
                                        }}</span>
                                </div>
                            </CardContent>
                        </Card>
                        <Card>
                            <CardHeader>
                                <CardTitle>Date de début de la publicité.</CardTitle>
                            </CardHeader>
                            <CardContent>
                                <Calendar v-model="startAt" :weekday-format="'short'" class="rounded-md border"
                                          id="start_at"/>
                                <span v-if="adsForm.errors.start_at" class="text-red-400 text-sm">{{
                                        adsForm.errors.start_at
                                    }}</span>
                            </CardContent>
                        </Card>
                        <Card>
                            <CardHeader>
                                <CardTitle>Date de fin de la publicité</CardTitle>
                            </CardHeader>
                            <CardContent>
                                <Calendar v-model="endAt" :weekday-format="'short'" class="rounded-md border"
                                          id="end_at"/>
                                <span v-if="adsForm.errors.end_at" class="text-red-400 text-sm">{{
                                        adsForm.errors.end_at
                                    }}</span>
                            </CardContent>
                        </Card>
                    </div>
                </div>
            </form>
        </section>
    </admin-layout>
</template>

<style scoped>

</style>
