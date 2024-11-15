<template>
    <section>
        <form class="space-y-6" method="post" action="/store">

            <card>
                <CardHeader>
                    <CardTitle>Créez votre Identité de Boutique !</CardTitle>
                    <CardDescription>Personnalisez votre boutique : entrez son nom et une description qui vous ressemble
                        !</CardDescription>
                </CardHeader>
                <CardContent class="space-y-4">

                    <div>
                        <Label for="name">Nom de la boutique</Label>

                        <Input placeholder="Nom de la boutique" v-model="form.name" type="text" name="name" id="name" />

                        <div class="text-red-500" v-if="props.nameError">{{ props.nameError }}</div>
                    </div>

                    <div>
                        <Label for="description">Description</Label>

                        <Textarea placeholder="Description de la boutique" v-model="form.description" name="description"
                            id="description" />

                        <div class="text-red-500" v-if="props.descriptionError">{{ props.descriptionError }}</div>
                    </div>

                </CardContent>
                <CardFooter class="flex items-center justify-between">
                    <Button variant="outline" @click.prevent="$emit('prev')">Precedent</Button>
                    <Button variant="outline"
                        @click.prevent="$emit('next', { name: form.name, description: form.description })">Suivant</Button>
                </CardFooter>
            </card>
        </form>
    </section>
</template>

<script lang="ts" setup>
import { ref } from "vue";
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Textarea } from "@/components/ui/textarea"
import { Label } from "@/components/ui/label"

import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"

const form = ref({
    name: "",
    description: "",
})

const props = defineProps<{
    nameError: string,
    descriptionError: string
}>()


</script>

<style scoped></style>
