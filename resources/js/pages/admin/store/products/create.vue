<script setup lang="ts">

import {readFileData} from "@/lib/utils";

import Layout from "../layouts/layout.vue";
import {useForm} from "@inertiajs/vue3";
import {createToaster} from "@meforma/vue-toaster";
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import {Textarea} from "@/components/ui/textarea";
import {Checkbox} from "@/components/ui/checkbox"
import {Switch} from '@/components/ui/switch'

import {
    Card,
    CardContent,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"

import {
    Select,
    SelectContent,
    SelectItem,
    SelectTrigger, SelectValue,
} from "@/components/ui/select"
import {Button} from "@/components/ui/button";

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
    status: null,
    barcode: null,
    discount: null,
    in_stock: false,
    has_delivered: false
})

const toggleStock = (value) => {
    form.in_stock = value
}

const handleCheckboxChange = (value) => {
    form.has_delivered = value
}

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

<template>
    <Layout>

        <div class="container max-w-screen-lg">
            <div class="space-y-4">
                <form action="">
                    <div class="mb-4 flex items-center justify-between space-y-2">
                        <h1 class="text-2xl font-bold tracking-tight">Ajout d'un article</h1>
                        <div class="flex gap-2">
                            <Button>Save to draft</Button>
                            <Button @click.prevent="submit">Publish</Button>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-6 gap-4">
                        <div class="md:col-span-4 space-y-4">
                            <!--                        general information-->
                            <card>

                                <CardHeader>
                                    <CardTitle>Informations générales de l'article</CardTitle>
                                </CardHeader>
                                <CardContent class="space-y-4">
                                    <div class="space-y-4">
                                        <Label for="name">Nom de l'article</Label>
                                        <Input placeholder="Nom de l'article" v-model="form.name" id="name"/>
                                        <span v-if="form.errors.name" class="text-red-400 text-sm">{{
                                                form.errors.name
                                            }}</span>
                                    </div>

                                    <div class="space-y-2">
                                        <Label for="description">Description de l'article</Label>
                                        <Textarea placeholder="description" v-model="form.description"
                                                  id="name"></Textarea>
                                        <span v-if="form.errors.description" class="text-red-400 text-sm">{{
                                                form.errors.description
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
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="w-8 h-8 text-gray-500"
                                                         aria-hidden="true" viewBox="0 -960 960 960" fill="#5f6368">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="2"
                                                              d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                                                    </svg>
                                                </div>
                                                <input id="dropzone-file" type="file" class="hidden"
                                                       @input="files($event)"
                                                       accept="image/jpeg,image/png"/>
                                            </label>


                                        </div>

                                    </div>
                                </CardContent>

                            </card>

                        </div>

                        <div class="md:col-span-2 space-y-4">

                            <!--                        pricing & discount-->
                            <card>
                                <CardHeader>
                                    <CardTitle>Prix</CardTitle>
                                </CardHeader>

                                <CardContent>
                                    <div class="space-y-4">
                                        <Label for="price">Prix de l'article</Label>
                                        <Input placeholder="200" v-model="form.price" id="price" type="number"/>
                                        <span v-if="form.errors.price" class="text-red-400 text-sm">{{
                                                form.errors.price
                                            }}</span>
                                    </div>
                                    <div class="space-y-4">
                                        <Label for="discount">Prix Remise</Label>
                                        <Input placeholder="200" v-model="form.discount" id="discount" type="number"/>
                                        <span v-if="form.errors.discount" class="text-red-400 text-sm">{{
                                                form.errors.discount
                                            }}</span>
                                    </div>

                                    <hr class="my-4"/>
                                    <div class="flex items-center gap-4">
                                        <Switch id="in_stock" :checked="form.in_stock" @update:checked="toggleStock"/>
                                        <Label for="in_stock">En stock</Label>
                                    </div>
                                </CardContent>

                            </card>

                            <!--                        status-->
                            <card>

                                <CardHeader>
                                    <CardTitle>Status</CardTitle>
                                </CardHeader>


                                <CardContent>
                                    <div class="space-y-2">
                                        <Select v-model="form.status">
                                            <SelectTrigger>
                                                <SelectValue placeholder="Selectioner le status de votre categorie"/>
                                            </SelectTrigger>
                                            <SelectContent>
                                                <template v-for="status in $page.props.status" :key="status.id">
                                                    <SelectItem :value="status.name">{{ status.name }}</SelectItem>
                                                </template>
                                            </SelectContent>
                                        </Select>
                                        <span v-if="form.errors.status" class="text-red-400 text-sm">{{
                                                form.errors.status
                                            }}</span>

                                    </div>

                                </CardContent>


                            </card>

                            <!--                        Category-->
                            <card>

                                <CardHeader>
                                    <CardTitle>Categorie</CardTitle>
                                </CardHeader>


                                <CardContent>

                                    <div class="space-y-2">
                                        <Select v-model="form.category_id">
                                            <SelectTrigger>
                                                <SelectValue placeholder="Selectioner une categorie"/>
                                            </SelectTrigger>
                                            <SelectContent>
                                                <template v-for="category in $page.props.categories" :key="category.id">
                                                    <SelectItem :value="category.id">{{ category.name }}</SelectItem>
                                                </template>
                                            </SelectContent>
                                        </Select>
                                        <span v-if="form.errors.category_id" class="text-red-400 text-sm">{{
                                                form.errors.category_id
                                            }}</span>

                                    </div>
                                </CardContent>


                            </card>

                            <card>
                                <CardHeader>
                                    <CardTitle>Mode de livraison</CardTitle>
                                </CardHeader>
                                <CardContent>
                                    <div class="flex items-center space-x-2">
                                        <Checkbox id="has_delivered" :checked="form.has_delivered"
                                                  @update:checked="handleCheckboxChange"/>
                                        <label for="has_delivered"
                                               className="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                            Livraison a domicile
                                        </label>
                                        <div class="text-red-500" v-if="form.errors.has_delivered">{{
                                                form.errors.has_delivered
                                            }}
                                        </div>
                                    </div>
                                </CardContent>

                            </card>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </Layout>
</template>


<style scoped></style>
