<template>
    <Layout>
        <section class="p-4">

            <h3 class="text-2xl mb-4 mt-2 font-medium">Ajout d'un article</h3>

        </section>

        <section class="px-4">

            <form action="">
                <div class="grid lg:grid-cols-product gap-2">
                    <div>

                        <!--                        general information-->
                        <card>

                            <CardHeader>
                                <CardTitle>Information generale de l'article</CardTitle>
                            </CardHeader>
                            <CardContent>
                                <div class="space-y-2">
                                    <Label for="name">Nom de l'article</Label>
                                    <Input placeholder="Nom de l'article" v-model="form.name" id="name" />
                                    <span v-if="form.errors.name" class="text-red-400 text-sm">{{
                                        form.errors.name
                                        }}</span>
                                </div>

                                <div class="space-y-2">
                                    <Label for="description">Description de l'article</Label>
                                    <Textarea placeholder="description" v-model="form.description" id="name"></Textarea>
                                    <span v-if="form.errors.description" class="text-red-400 text-sm">{{
                                        form.errors.description
                                        }}</span>
                                </div>
                            </CardContent>

                        </card>

                        <!--                        media -->
                        <card class="mt-4">
                            <CardHeader>
                                <CardTitle>
                                    Product Media
                                </CardTitle>
                            </CardHeader>
                            <CardContent>
                                <div class="space-y-2">

                                    <div class="grid lg:grid-cols-6 items-center justify-center">

                                        <template v-if="form.images">
                                            <template v-for="image in form.images" :key="image">
                                                <div class="">
                                                    <img :src="readFileData(image)"
                                                        class="h-[100px] w-[150px] object-cover rounded-md"
                                                        :alt="`image du produit ${form.name}`">
                                                </div>
                                            </template>
                                        </template>

                                        <label for="dropzone-file"
                                            class="flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 h-[100px] w-[150px]">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500"
                                                    aria-hidden="true" viewBox="0 -960 960 960" fill="#5f6368">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                                </svg>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" @input="files($event)"
                                                accept="image/jpeg,image/png" />
                                        </label>


                                    </div>

                                    <Input name="image" type="file" @input="form.image = $event.target.files[0]"
                                        inputType="file" :error="form.errors.image" accept="image/jpeg,image/png" />

                                </div>
                            </CardContent>

                        </card>

                        <!--                        inventory-->
                        <card class="mt-4">
                            <CardHeader>
                                <CardTitle>
                                    Inventory
                                </CardTitle>
                            </CardHeader>
                            <CardContent>

                                <Label for="qty">Quantite en stock</Label>
                                <Input name="qty" v-model="form.qty" placeholder="2" />
                                <span v-if="form.errors.qty" class="text-red-400 text-sm" pla>{{
                                    form.errors.qty
                                    }}</span>


                            </CardContent>
                        </card>
                    </div>

                    <div>

                        <!--                        status & category-->
                        <card>

                            <CardHeader>
                                <CardTitle>Status</CardTitle>
                            </CardHeader>


                            <CardContent class="space-y-2">
                                <div class="space-y-2">
                                    <Label for="status">Status</Label>
                                    <Select v-model="form.status" name="status">
                                        <SelectTrigger>
                                            <SelectValue placeholder="Selectioner le status de votre categorie" />
                                        </SelectTrigger>
                                        <SelectContent>
                                            <SelectGroup>
                                                <template v-for="status in $page.props.status" :key="status.id">
                                                    <SelectItem :value="status.id">{{ status.name }}</SelectItem>
                                                </template>
                                            </SelectGroup>
                                        </SelectContent>
                                    </Select>
                                    <span v-if="form.errors.status" class="text-red-400 text-sm">{{
                                        form.errors.status }}</span>

                                </div>

                                <div class="space-y-2">
                                    <Label for="categorie">Categorie</Label>
                                    <Select v-model="form.category_id">
                                        <SelectTrigger>
                                            <SelectValue placeholder="Selectioner une categorie" />
                                        </SelectTrigger>
                                        <SelectContent>
                                            <SelectGroup>
                                                <template v-for="category in $page.props.categories" :key="category.id">
                                                    <SelectItem :value="category.id">{{ category.name }}</SelectItem>
                                                </template>
                                            </SelectGroup>
                                        </SelectContent>
                                    </Select>
                                    <span v-if="form.errors.category_id" class="text-red-400 text-sm">{{
                                        from.errors.category_id }}</span>

                                </div>
                            </CardContent>


                        </card>

                        <!--                        pricing & discount-->
                        <card class="mt-4">
                            <CardHeader>
                                <CardTitle>Prix</CardTitle>
                            </CardHeader>

                            <CardContent>
                                <div class="space-y-2">
                                    <Label for="price">Prix de l'article</Label>
                                    <Input placeholder="200" v-model="form.price" id="price" type="number" />
                                    <span v-if="form.errors.price" class="text-red-400 text-sm">{{
                                        form.errors.price
                                        }}</span>
                                </div>
                                <div class="space-y-2">
                                    <Label for="discount">discount</Label>
                                    <Input placeholder="200" v-model="form.discount" id="discount" type="number" />
                                    <span v-if="form.errors.discount" class="text-red-400 text-sm">{{
                                        form.errors.discount
                                        }}</span>
                                </div>
                            </CardContent>

                        </card>

                        <card class="mt-4">
                            <CardHeader>
                                <CardTitle>Mode de livraison</CardTitle>
                            </CardHeader>
                            <CardContent>
                                <div className="flex items-center space-x-2">
                                    <Checkbox id="has_delivered" v-model="form.has_delivered" />
                                    <label for="has_delivered"
                                        className="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                        Livraison a domicile
                                    </label>
                                    <div class="text-red-500" v-if="form.errors.has_delivered">{{
                                        form.errors.has_delivered
                                        }}</div>
                                </div>
                            </CardContent>

                        </card>

                        <!--                        btn submit-->
                        <card class="mt-4">
                            <CardContent></CardContent>
                            <CardFooter class="w-full">

                                <button type="submit" @click.prevent="submit"
                                    class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                                    Ajouter l'article
                                </button>

                            </CardFooter>
                        </card>
                    </div>
                </div>
            </form>

        </section>

    </Layout>
</template>

<script setup lang="ts">

import { readFileData } from "@/lib/utils";

import Layout from "../../layouts/layout.vue";
import { useForm } from "@inertiajs/vue3";
import { createToaster } from "@meforma/vue-toaster";
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import { Textarea } from "@/components/ui/textarea";
import { Checkbox } from "@/components/ui/checkbox"

import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"

import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectTrigger,
} from "@/components/ui/select"




const toaster = createToaster();

const files = (event) => {
    form.data().images.push(event.target.files[0])
    console.log(form.data().images)
}

const form = useForm({
    name: null,
    description: null,
    price: null,
    image: null,
    images: [],
    category_id: null,
    qty: null,
    status: null,
    barcode: null,
    discount: null,
    has_delivered: false
})

const submit = () => {
    form.post('/ma-boutique/articles', {
        onError: () => {
            toaster.error('An error occurred while adding the product')
        },
        onSuccess: () => {
            form.reset()
            toaster.success('Product Added Successfully')
        }
    }
    )
}

</script>

<style scoped></style>
