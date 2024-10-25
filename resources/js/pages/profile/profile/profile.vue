<script setup lang="ts">

import { useForm } from '@inertiajs/vue3';
import accountLayout from '../layouts/accountLayout.vue';
import inputComponent from '@/components/input-component.vue';
import buttonComponent from '@/components/button-component.vue';
import card from '@/components/card.vue';
import { createToaster } from "@meforma/vue-toaster";

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

}

</script>

<template>

    <account-layout>
        <section class="py-2 space-y-4">
            <card>
                <h3 class="text-xl">Profile</h3>
                <p>Update your accounts's profile information and email address.</p>

                <form action="" method="post">
                    <input-component placeholder="Nom d'utilisateur" name="name" title="Nom d'utilisateur"
                        v-model="profileNamesForm.name" inputType="text" :error="profileNamesForm.errors.name" />
                    <input-component placeholder="Email" name="email" title="Email" v-model="profileNamesForm.email"
                        inputType="email" :error="profileNamesForm.errors.email" />

                    <!-- <button-component title="Modifier" type="submit" isLink="false" onclick="saveProfileInfo()"/> -->
                    <button type="submit" @click.prevent="saveProfileInfo"
                        class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                        Modifier
                    </button>
                </form>
            </card>

            <card>
                <h3 class="text-xl">Update password</h3>
                <p>Ensure your account is using a long, random password to stay secure.</p>

                <form action="" method="post">
                    <input-component placeholder="Mot de passe actuelle" name="currentPassword"
                        title="Mot de passe actuelle" v-model="passwordForm.current_password" inputType="password"
                        :error="passwordForm.errors.current_password" />

                    <input-component placeholder="Nouveau mot de passe" name="password" title="password"
                        v-model="passwordForm.password" inputType="password"
                        :error="passwordForm.errors.password" />

                    <input-component placeholder="Confirmer le mot de passe" name="confirmation_password"
                        title="Confirmer le mot de passe" v-model="passwordForm.password_confirmation"
                        inputType="password" :error="passwordForm.errors.password_confirmation" />

                    <!-- <button-component title="Modifier" type="submit" isLink="false" onclick="saveProfileInfo()"/> -->
                    <button type="submit" @click.prevent="updatePassword"
                        class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                        Modifier le mot de passe
                    </button>
                </form>
            </card>

            <card>
                <h3 class="text-xl">Delete account</h3>
                <p class="mb-4">Once your account is deleted , all of its resources and data will be permenantly
                    deleted,
                    Before deleting your account , please download any data or information that you wish to retain
                </p>
                <button type="submit" @click.prevent="deleteAccount"
                    class="bg-error text-white p-2 rounded-md hover:bg-error transition-all">
                    Supprimer mon compte
                </button>
            </card>

        </section>
    </account-layout>

</template>