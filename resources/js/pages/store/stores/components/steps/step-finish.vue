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

</script>

<template>

    <Card>
        <CardHeader>
            <CardTitle>Conditions d'Utilisation de Matrixt-ecommerce</CardTitle>
        </CardHeader>
        <CardContent>

            <div>
                <h3>1. Acceptation des Conditions</h3>
                <p>En utilisant notre application, vous acceptez de respecter ces conditions d'utilisation. Si vous
                    n'êtes pas d'accord avec ces termes, veuillez ne pas utiliser l'application.</p>
            </div>

        </CardContent>
        <CardFooter class="flex items-center justify-between">
            <Button variant="outline" @click.prevent="$emit('prev')">Precedent</Button>
            <Button variant="outline" @click.prevent="$emit('finish')">Cree ma boutique</Button>
        </CardFooter>
    </Card>

</template>

<style scoped></style>
