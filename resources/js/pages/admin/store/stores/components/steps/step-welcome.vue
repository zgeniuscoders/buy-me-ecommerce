<template>
    <section class="flex items-center justify-center">
        <card>
            <CardHeader>
                <CardTitle>Bienvenue sur Matrixt !</CardTitle>
                <CardDescription>Créez votre boutique en ligne en toute simplicité et démarquez-vous dans le monde du
                    e-commerce !</CardDescription>
            </CardHeader>
            <CardContent>
                <p>Nous sommes ravis de vous accueillir sur Matrixt, la plateforme qui vous permet de créer votre propre
                    boutique en ligne en toute simplicité !

                    Avec Matrixt, vous aurez toutes les outils nécessaires pour lancer votre projet, que vous soyez un
                    entrepreneur débutant ou un commerçant expérimenté. Créez votre boutique, personnalisez-la selon vos
                    goûts et commencez à vendre vos produits en quelques clics.

                    Notre équipe est là pour vous accompagner tout au long de votre aventure. Profitez de nos
                    ressources, de nos conseils et de notre support pour faire de votre boutique en ligne un véritable
                    succès.

                    Merci de nous choisir pour réaliser votre rêve entrepreneurial. Commencez dès maintenant et
                    transformez votre passion en profit avec Matrixt !</p>
            </CardContent>
            <CardFooter>
                <Button variant="outline" @click.prevent="$emit('next')">Suivant</Button>
            </CardFooter>
        </card>
    </section>
</template>

<script setup lang="ts">
import emitter from "tiny-emitter/instance"
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

<style scoped></style>
