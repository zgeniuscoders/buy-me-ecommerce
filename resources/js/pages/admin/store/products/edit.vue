<script setup>

import Layout from "../../layouts/layout.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import { createToaster } from "@meforma/vue-toaster";

import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import { Textarea } from "@/components/ui/textarea";
import { Checkbox } from "@/components/ui/checkbox"
import {Button} from "@/components/ui/button";
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
    SelectTrigger,
} from "@/components/ui/select"
import {readFileData} from "@/lib/utils";

const toaster = createToaster();
const { product, categories, status } = usePage().props

const files = (event) => {
    form.data().images.push(event.target.files[0])
    console.log(form.data().images)
}

const form = useForm({
    name: null,
    description: null,
    price: null,
    category_id: null,
    status: null,
    barcode: null,
    discount: null,
    in_stock: false,
    has_delivered: false
})

const updateProduct = () => {
    form.put(`/ma-boutique/articles/${product.id}`, {
        onError: () => {
            toaster.error('An error occurred while adding the product')
        },
        onSuccess: () => {
            form.reset()
            toaster.success('Product updated Successfully')
        }
    }
    )
}

form.name = product.name
form.description = product.description
form.status = product.status
form.price = product.price
form.discount = product.discount
form.has_delivered = product.has_delivered
form.category_id = product.category_id
form.in_stock = product.in_stock


const toggleStock = (value) => {
    form.in_stock = value
}

const handleCheckboxChange = (value) => {
    form.has_delivered = value
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
                            <Button @click.prevent="updateProduct">Mettre a jour</Button>
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
                                        <Label for="status">Status</Label>
                                        <Select v-model="form.status" name="status">
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
                                    <div class="space-y-4">
                                        <Label for="categorie">Categorie</Label>
                                        <Select v-model="form.category_id">
                                            <SelectTrigger>
                                                <SelectValue placeholder="Selectioner une categorie"/>
                                            </SelectTrigger>
                                            <SelectContent>
                                                <template v-for="category in $page.props.categories"
                                                          :key="category.id">
                                                    <SelectItem :value="category.id">{{
                                                            category.name
                                                        }}
                                                    </SelectItem>
                                                </template>
                                            </SelectContent>
                                        </Select>
                                        <span v-if="form.errors.category_id" class="text-red-400 text-sm">{{
                                                from.errors.category_id
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
