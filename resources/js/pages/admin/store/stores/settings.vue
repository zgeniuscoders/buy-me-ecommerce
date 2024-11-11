<script setup lang="ts">
import layout from '../layouts/layout.vue';

import Input from '@/components/ui/input/Input.vue';
import Textarea from '@/components/ui/textarea/Textarea.vue';
import Label from '@/components/ui/label/Label.vue';
import Button from '@/components/ui/button/Button.vue';
import { readFileData } from '@/lib/utils';
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"
import { router, useForm, usePage } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import { Shop } from '@/models/Shop';
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster();

const props = usePage().props
const state = ref<{
    shop: Shop,
    changeShopNameRoute: string,
    changeShopImageRoute: string,
    deleteShopRoute: string
}>({
    shop: {},
    changeShopNameRoute: "",
    changeShopImageRoute: "",
    deleteShopRoute: ""
})

state.value.shop = props.shop
state.value.changeShopNameRoute = props.changeShopNameRoute
state.value.changeShopImageRoute = props.changeShopImageRoute
state.value.deleteShopRoute = props.deleteShopRoute

const shopProfileForm = useForm({
    name: "",
    description: ""
})

const shopCoverPhoto = useForm({
    image: null
})

const deleteShop = () => {
    const res: boolean = confirm("voulez vraiment suprimmer votre boutique")

    if (res) {
        router.delete(state.value.deleteShopRoute, {
            onError: (e) => {
                toaster.error("Une erreur inatnedu se survenu lors de la supression de votre boutique")
            },
            onSuccess: () => {
                router.get("/")
            }
        })
    }


}

const updateShopInfo = () => {
    shopProfileForm.post(state.value.changeShopNameRoute, {
        onError: () => {
            toaster.error("An excepted error occurred")
        },
        onSuccess: () => {
            toaster.success("success")
        }
    })
}

const updateShopImage = () => {
    shopCoverPhoto.post(state.value.changeShopImageRoute, {
        onError: () => {
            toaster.error("An excepted error occurred")
        },
        onSuccess: () => {
            toaster.success("success")
        }
    })
}

onMounted(() => {
    shopProfileForm.name = state.value.shop?.name
    shopProfileForm.description = state.value.shop?.description
})



</script>

<template>

    <layout>
        <section class="py-2 space-y-4 p-2">
            <card>

                <CardHeader>
                    <CardTitle>
                        Modification du nom et de la description du boutique
                    </CardTitle>
                    <CardDescription>
                        Update your accounts's profile information and email address.
                    </CardDescription>
                </CardHeader>

                <CardContent>
                    <form action="" method="post" class="space-y-4">
                        <div>
                            <Label for="name">Nom de la boutique</Label>
                            <Input v-model="shopProfileForm.name" placeholder="Nom de la boutique" id="name" />
                            <span v-if="shopProfileForm.errors.name" class="text-red-400 text-sm" pla>{{
                                shopProfileForm.errors.name }}</span>
                        </div>

                        <div>
                            <Label for="description">Nom de la boutique</Label>
                            <Textarea v-model="shopProfileForm.description" id="description"
                                placeholder="Description de la boutique"></Textarea>
                            <span v-if="shopProfileForm.errors.description" class="text-red-400 text-sm" pla>{{
                                shopProfileForm.errors.description }}</span>
                        </div>

                        <Button type="submit" @click.prevent="updateShopInfo"
                            class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                            Enregistrer les modification
                        </Button>
                    </form>
                </CardContent>

            </card>

            <card>

                <CardHeader>
                    <CardTitle>
                        Modification de l'image de couverture de la boutique
                    </CardTitle>
                    <CardDescription>
                        Update your accounts's profile information and email address.
                    </CardDescription>
                </CardHeader>

                <CardContent>
                    <div class="rounded-md">
                        <img v-if="!shopCoverPhoto.image" :src="state.shop?.image"
                            :alt="`image de couverture de la boutique ${state.shop?.name}`"
                            class="w-60 h-60 object-contain rounded-md">
                        <img v-else :src="readFileData(shopCoverPhoto.image)"
                            :alt="`image de couverture de la boutique ${state.shop?.name}`"
                            class="w-60 h-60 object-contain rounded-md">

                    </div>
                    <form action="" method="post" class="space-y-4">


                        <div>
                            <Label for="image">Choissisez une image de couverture</Label>
                            <Input placeholder="Nom de la boutique" id="image" type="file"
                                @input="shopCoverPhoto.image = $event.target.files[0]" />
                            <span v-if="shopProfileForm.errors.name" class="text-red-400 text-sm" pla>{{
                                shopProfileForm.errors.name }}</span>
                        </div>

                        <Button type="submit" @click.prevent="updateShopImage" :disabled="shopCoverPhoto.image == null"
                            class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                            Enregistrer les modification
                        </Button>
                    </form>
                </CardContent>

            </card>

            <card>
                <CardHeader>
                    <CardTitle>Delete account</CardTitle>
                    <CardDescription>
                        Once your account is deleted , all of its resources and data will be permenantly
                        deleted,
                        Before deleting your account , please download any data or information that you wish to retain
                    </CardDescription>
                </CardHeader>

                <CardFooter>
                    <Button type="submit" @click.prevent="deleteShop"
                        class="bg-red-500 text-white p-2 rounded-md hover:bg-error transition-all">
                        Supprimer mon compte
                    </Button>
                </CardFooter>

            </card>
        </section>
    </layout>
</template>
