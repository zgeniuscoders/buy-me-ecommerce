<script setup lang="ts">

import { useForm } from '@inertiajs/vue3';
import accountLayout from '../layouts/accountLayout.vue';
import { createToaster } from "@meforma/vue-toaster";
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import Button from '@/components/ui/button/Button.vue';
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"


const toaster = createToaster();

const profileNamesForm = useForm({
    name: "",
    email: ""
})

const passwordForm = useForm({
    current_password: "",
    password: "",
    password_confirmation: ""
})

const saveProfileInfo = () => {
    profileNamesForm.put("/mon-compte/changer-mon-nom-ou-adresse-email", {
        onError: (e) => {
            console.error(e);

        },
        onSuccess: () => {
            toaster.success("Votre profile a ete bien mis a jour")
            passwordForm.reset()
        }
    })
}

const updatePassword = () => {
    passwordForm.put("/mon-compte/changer-mot-de-passe", {
        onError: (e) => {
            console.error(e);

        },
        onSuccess: () => {
            toaster.success("Votre mot de passe a ete changer")
            passwordForm.reset()
        }
    })
}

const deleteAccount = () => {
    let isTrue: Boolean = confirm("voulez-vous vraiment supprimer votre compte ?")
    if (isTrue) {

    }
}

</script>

<template>

    <account-layout>
        <section class="py-2 space-y-4 p-2">

            <card>

                <CardHeader>
                    <CardTitle>
                        Profile
                    </CardTitle>
                    <CardDescription>
                        Update your accounts's profile information and email address.
                    </CardDescription>
                </CardHeader>

                <CardContent>
                    <form action="" method="post" class="space-y-4">
                        <div>
                            <Label for="name">Nom d'utilisateur</Label>
                            <Input v-model="profileNamesForm.name" placeholder="Nom d'utilisateur" id="name" />
                            <span v-if="profileNamesForm.errors.name" class="text-red-400 text-sm" pla>{{
                                profileNamesForm.errors.name }}</span>
                        </div>

                        <div>
                            <Label for="name">Email</Label>
                            <Input v-model="profileNamesForm.email" placeholder="Adresse email" id="name" />
                            <span v-if="profileNamesForm.errors.email" class="text-red-400 text-sm" pla>{{
                                profileNamesForm.errors.email }}</span>
                        </div>


                        <Button type="submit" @click.prevent="saveProfileInfo"
                            class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                            Modifier
                        </Button>
                    </form>
                </CardContent>

            </card>

            <card>
                <CardHeader>
                    <CardTitle>
                        Update password
                    </CardTitle>
                    <CardDescription>
                        Ensure your account is using a long, random password to stay secure.
                    </CardDescription>
                </CardHeader>
                <CardContent>
                    <form action="" method="post" class="space-y-2">

                        <div>
                            <Label for="currentPassword">Mot de passe actuelle</Label>
                            <Input v-model="passwordForm.current_password" placeholder="Mot de passe actuelle"
                                id="currentPassword" />
                            <span v-if="passwordForm.errors.current_password" class="text-red-400 text-sm" pla>{{
                                passwordForm.errors.current_password }}</span>
                        </div>

                        <div>
                            <Label for="password">Nouveau mot de passe</Label>
                            <Input v-model="passwordForm.password" placeholder="Nouveau mot de passe" id="password" />
                            <span v-if="passwordForm.errors.password" class="text-red-400 text-sm" pla>{{
                                passwordForm.errors.password }}</span>
                        </div>

                        <div>
                            <Label for="password">Confirmer le mot de passe</Label>
                            <Input v-model="passwordForm.password_confirmation" placeholder="Confirmer le mot de passe"
                                id="confirmation_password" />
                            <span v-if="passwordForm.errors.password_confirmation" class="text-red-400 text-sm" pla>{{
                                passwordForm.errors.password_confirmation }}</span>
                        </div>

                        <Button type="submit" @click.prevent="updatePassword"
                            class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                            Modifier le mot de passe
                        </Button>
                    </form>
                </CardContent>

            </card>

            <card>
                <CardHeader>
                    <CardTitle>Delete account</CardTitle>
                    <CardDescription>
                        Once your account is deleted , all of its resources and data will be permenantly
                        deleted,
                        Before deleting your account , please download any data or information that you wish to retain
                    </CardDescription>
                </CardHeader>

                <CardFooter>
                    <Button type="submit" @click.prevent="deleteAccount"
                        class="bg-red-500 text-white p-2 rounded-md hover:bg-error transition-all">
                        Supprimer mon compte
                    </Button>
                </CardFooter>

            </card>

        </section>
    </account-layout>

</template>