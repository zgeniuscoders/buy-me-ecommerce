<script setup lang="ts">

import adminLayout from '../layouts/adminLayout.vue';
import {CardContent, Card, CardTitle, CardHeader, CardDescription} from "@/components/ui/card"
import {useForm} from '@inertiajs/vue3';
import {createToaster} from "@meforma/vue-toaster";
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectLabel,
    SelectTrigger,
    SelectValue,
} from "@/components/ui/select"

const toaster = createToaster();

const categoryForm = useForm({
    id: Number,
    category_id: null,
    status: String,
    name: "",
    image: null
})

function readFileData(file) {
    return URL.createObjectURL(file)
}


const addCategory = () => {
    categoryForm.post("/admin/categories", {
        onError: (e) => {
            toaster.error("Une erreur se produite lors de la mise a jour du Category " + categoryForm.name)
        },
        onSuccess: () => {
            toaster.success(`La category ${categoryForm.name} est ete mis ajour avec success`)
            categoryForm.reset()
        }
    })
}

</script>

<template>

    <admin-layout>
        <section class="p-2 space-y-2">
            <Card>
                <CardHeader>
                    <CardTitle>
                        Ajout d'une categorie
                    </CardTitle>
                </CardHeader>
            </Card>
            <form action="" method="post" class="space-y-4">

                <card>

                    <CardHeader>
                        <CardTitle>Categorie Details</CardTitle>
                    </CardHeader>

                    <CardContent class="space-y-4">
                        <div class="space-y-2">
                            <Label for="name">Nom de la category</Label>
                            <Input placeholder="Nom de la category" v-model="categoryForm.name" id="name"/>
                            <span v-if="categoryForm.errors.name" class="text-red-400 text-sm">{{
                                    categoryForm.errors.name
                                }}</span>
                        </div>


                        <div class="space-y-2">
                            <Select v-model="categoryForm.category_id">
                                <SelectTrigger>
                                    <SelectValue placeholder="Selectioner une categorie"/>
                                </SelectTrigger>
                                <SelectContent>
                                    <template v-for="category in $page.props.categories" :key="category.id">
                                        <SelectItem :value="category.id">{{ category.name }}</SelectItem>
                                    </template>
                                </SelectContent>
                            </Select>
                            <span v-if="categoryForm.errors.category_id" class="text-red-400 text-sm">{{
                                    categoryForm.errors.category_id
                                }}</span>

                        </div>

                        <div class="space-y-2">
                            <Select v-model="categoryForm.status">
                                <SelectTrigger>
                                    <SelectValue placeholder="Selectioner le status de votre categorie"/>
                                </SelectTrigger>
                                <SelectContent>
                                    <template v-for="status in $page.props.status" :key="status.id">
                                        <SelectItem :value="status.name">{{ status.name }}</SelectItem>
                                    </template>
                                </SelectContent>
                            </Select>
                            <span v-if="categoryForm.errors.status" class="text-red-400 text-sm">{{
                                    categoryForm.errors.status
                                }}</span>

                        </div>
                    </CardContent>

                </card>

                <card>

                    <CardHeader>
                        <CardTitle>Images</CardTitle>
                    </CardHeader>
                    <CardContent class="flex items-center gap-2">
                        <template v-if="categoryForm.image">
                            <div class="my-2">
                                <img :src="readFileData(categoryForm.image)"
                                     class="h-[100px] w-[150px] object-cover rounded-md"
                                     :alt="`image de la category ${categoryForm.name}`">
                            </div>
                        </template>

                        <label for="dropzone-file"
                               class="w-full flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 h-[100px]">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" aria-hidden="true"
                                     viewBox="0 -960 960 960" fill="#5f6368">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                                </svg>
                            </div>

                            <input id="dropzone-file" type="file" class="hidden"
                                   @input="categoryForm.image = $event.target.files[0]" accept="image/jpeg,image/png"/>

                        </label>
                    </CardContent>

                </card>

                <card>
                    <CardHeader></CardHeader>
                    <CardContent>
                        <div class="flex items-end justify-end">
                            <button type="submit" @click.prevent="addCategory"
                                    class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                                Enregistrer
                            </button>
                        </div>
                    </CardContent>

                </card>
            </form>

        </section>
    </admin-layout>

</template>
