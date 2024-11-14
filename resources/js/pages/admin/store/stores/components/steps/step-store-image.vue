<script setup lang="ts">
import { Button } from "@/components/ui/button"

import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"
import { ref } from "vue";

const form = ref({
    image: null
})

const props = defineProps<{
    imageError: string
}>()

const files = (event) => {
    form.value.image = event.target.files[0]
}

function readFileData(file) {
    return URL.createObjectURL(file)
}

</script>

<template>
    <section>
        <form class="space-y-6" method="post" action="/store">

            <card>
                <CardHeader>
                    <CardTitle>Téléchargez l'Image de Votre Boutique !</CardTitle>
                    <CardDescription>Ajoutez une Image qui Représente Votre Boutique</CardDescription>
                </CardHeader>
                <CardContent class="space-y-4">

                    <template v-if="form.image">
                        <div class="my-2">
                            <img :src="readFileData(form.image)" class="h-[400px] w-full object-cover rounded-md"
                                :alt="`image de la category `">
                        </div>
                    </template>

                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 h-[80px]">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" aria-hidden="true"
                                viewBox="0 -960 960 960" fill="#5f6368">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" @input="files($event)"
                            accept="image/jpeg,image/png" />
                    </label>

                    <div class="text-red-500" v-if="props.imageError">{{ props.imageError }}</div>


                </CardContent>
                <CardFooter class="flex items-center justify-between">
                    <Button variant="outline" @click.prevent="$emit('prev')">Precedent</Button>
                    <Button variant="outline" @click.prevent="$emit('next', {
                        image: form.image
                    })">Suivant</Button>
                </CardFooter>
            </card>
        </form>
    </section>
</template>

<style scoped></style>
