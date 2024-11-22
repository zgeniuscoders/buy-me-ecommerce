<script setup lang="ts">

import {Select, SelectContent, SelectItem, SelectTrigger, SelectValue} from "@/components/ui/select";
import {Button} from "@/components/ui/button";
import {Card, CardContent, CardFooter, CardHeader, CardTitle,CardDescription} from "@/components/ui/card";
import Input from "@/components/ui/input/Input.vue";
import {ref} from "vue";
import {Minus} from "lucide-vue-next";

interface Variant {
    id: number,
    name: string,
    key: string,
    value: string[]
}

interface ProductVariant {
    name: string,
    value: string[]
}


interface SelectedProductVariant {
    name: string,
    value: string
}

const variants = ref<Variant[]>([
    {id: 1, name: "Couleur", key: "color", value: []},
    {id: 2, name: "Taille", key: "size", value: ["S", "M", "L", "XL"]},
    {id: 3, name: "Poids", key: "weight", value: []},
]);

const selectedVariants = ref<SelectedProductVariant[]>([
    // Exemple : { id: 1, value: '#ff0000' }
]);

const addVariant = () => {
    selectedVariants.value.push({value: [], name: ''});
};

const removeVariant = (index: number) => {
    selectedVariants.value.splice(index, 1);
};

const getVariantKey = (name: string) => {
    const variant = variants.value.find((v) => v.name === name);
    return variant ? variant.key : null;
};

const getVariantOptions = (name: string) => {
    const variant = variants.value.find((v) => v.name === name);
    return variant ? variant.value : [];
};

const save = () => {
    const mergedVariants: ProductVariant[] = [];

    selectedVariants.value.forEach((variant) => {
        const existingVariant = mergedVariants.find(
            (v) => v.name === variant.name
        );

        if (existingVariant) {
            if (!existingVariant.value.includes(variant.value)) {
                existingVariant.value.push(variant.value);
            }
        } else {
            mergedVariants.push({
                name: variant.name,
                value: [variant.value],
            });
        }
    });

    console.log("Enregistrer les caractéristiques :", mergedVariants);
};

</script>

<template>
    <card>
        <CardHeader>
            <CardTitle class="capitalize">
                caractéristiques
            </CardTitle>
            <CardDescription>
                Les caractéristiques sont les éléments qui décrivent un produit et permettent de le personnaliser ou de
                le distinguer. Par exemple, pour un vêtement, la taille (S, M, L) et la couleur (rouge, bleu) sont des
                caractéristiques. Elles permettent à l'utilisateur de choisir les spécificités qui correspondent à ses
                besoins ou préférences.
            </CardDescription>
        </CardHeader>
        <CardContent class="space-y-4">

            <div v-for="(selectedVariant, index) in selectedVariants" :key="index">

                <div class="grid md:grid-cols-3 gap-2 w-full items-center">
                    <Select class="md:col-span-3" v-model="selectedVariant.name">
                        <SelectTrigger>
                            <SelectValue placeholder="Sélectionner une variante"/>
                        </SelectTrigger>

                        <SelectContent>
                            <template v-for="variant in variants" :key="variant.id">
                                <SelectItem :value="variant.name">{{ variant.name }}</SelectItem>
                            </template>
                        </SelectContent>
                    </Select>

                    <Input
                        class="md:col-span-3"
                        v-if="getVariantKey(selectedVariant.name) === 'color'"
                        type="color"
                        v-model="selectedVariant.value"
                    />
                    <Select class="md:col-span-2" v-else-if="getVariantKey(selectedVariant.name) === 'size'" v-model="selectedVariant.value">
                        <SelectTrigger>
                            <SelectValue placeholder="Sélectionner une taille"/>
                        </SelectTrigger>

                        <SelectContent>
                            <template v-for="size in getVariantOptions(selectedVariant.name)" :key="size">
                                <SelectItem :value="size">{{ size }}</SelectItem>
                            </template>
                        </SelectContent>
                    </Select>

                    <Input
                        v-else
                        v-model="selectedVariant.value"
                        placeholder="Entrez une valeur"
                    />

                    <Button class="col-span-1" variant="destructive" @click.prevent="removeVariant(index)">
                        <Minus/>
                    </Button>
                </div>

            </div>

        </CardContent>
        <CardFooter>
            <Button class="w-full" @click.prevent="addVariant">
                Ajouter une caractéristique
            </Button>
        </CardFooter>
    </card>
</template>

<style scoped>

</style>
