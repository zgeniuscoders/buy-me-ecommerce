<script setup lang="ts">

import {Button} from "@/components/ui/button";
import {Link} from "@inertiajs/vue3";
import {Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle} from "@/components/ui/card";

const {addAddressRoute} = defineProps<{
    addAddressRoute: string
}>()
</script>

<template>
    <Card>
        <CardHeader>
            <CardTitle>
                Adresse
            </CardTitle>
            <CardDescription>
                Ajoutez vos premiers produits
            </CardDescription>
        </CardHeader>
        <CardContent>
            <p class="mt-1 text-sm">Dans cette section, nous vous guiderons à travers le processus d'ajout
                d'un nouvel article sur notre plateforme.s</p>
        </CardContent>
        <CardFooter>
            <Button>
                <Link :href="addAddressRoute">
                    Cree un carnet d'adresse
                </Link>
            </Button>
        </CardFooter>
    </Card>
</template>

<style scoped>

</style>
