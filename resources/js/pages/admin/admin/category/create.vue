<script setup lang="ts">

import adminLayout from '../../layouts/adminLayout.vue';
import card from '@/components/card.vue';
import inputComponent from '@/components/input-component.vue';
import selectComponent from '@/components/select-component.vue';
import { useForm } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";

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
            toaster.error("Une erreur se produite lors de la mise a jour du category " + categoryForm.name)
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
        <section class="p-2">
            <h1 class="text-xl p-4">Ajout d'une categorie </h1>
            <form action="" method="post" class="space-y-4">

                <card>

                    <inputComponent placeholder="Category" name="name" title="Nom de category"
                        v-model="categoryForm.name" :error="categoryForm.errors.name" />

                    <select-component id="category_id" name="category_id" title="Sous category"
                        :options="$page.props.categories" v-model="categoryForm.category_id"
                        :error="categoryForm.errors.category_id" :idKey="true" />

                    <select-component id="status" name="status" title="Status" :options="$page.props.status"
                        v-model="categoryForm.status" :error="categoryForm.errors.status" />

                </card>

                <card class="flex items-center gap-2">

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
                                    d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                        </div>

                        <input id="dropzone-file" type="file" class="hidden"
                            @input="categoryForm.image = $event.target.files[0]" accept="image/jpeg,image/png" />

                    </label>

                </card>

                <card>
                    <div class="flex items-end justify-end">
                        <button type="submit" @click.prevent="addCategory"
                            class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                            Enregistrer
                        </button>
                    </div>
                </card>
            </form>

        </section>
    </admin-layout>

</template>