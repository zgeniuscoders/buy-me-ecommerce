<script setup lang="ts">
import adminLayout from '../../layouts/adminLayout.vue';
import card from '@/components/card.vue';
import inputComponent from '@/components/input-component.vue';
import selectComponent from '@/components/select-component.vue';
import { useForm } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster();

const userForm = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    role_id: 1,
    status: 1
})


const addUser = () => {
    userForm.post("/admin/utilisateurs", {
        onError: (e) => {
            toaster.error("Une erreur se produite lors de l'ajout de l'utilisateur ")
        },
        onSuccess: () => {
            toaster.success(`L'utilisateur ${userForm.name} est ete ajouter`)
        }
    })
}

</script>

<template>

    <admin-layout>
        <section class="p-2">
            <h1 class="text-xl p-4">Ajout d'un utilisateur </h1>
            <form action="" method="post" class="space-y-4">

                <card>

                    <div class="grid md:grid-cols-2 gap-4">
                        <inputComponent placeholder="zgenius" name="name" title="Nom d'utilisateur"
                            v-model="userForm.name" :error="userForm.errors.name" input-type="text"/>

                        <inputComponent placeholder="zgenius@gmail.com" name="email" title="Adresse email"
                            v-model="userForm.email" :error="userForm.errors.email" input-type="email"/>
                    </div>

                </card>
                <card>

                    <div class="grid md:grid-cols-2 gap-4">
                        <inputComponent placeholder="" name="password" title="Mot de passe" v-model="userForm.password"
                            :error="userForm.errors.password" input-type="password" />

                        <inputComponent placeholder="" name="confirmation_password" title="Confirmer le mot de passe"
                            v-model="userForm.password_confirmation" :error="userForm.errors.password_confirmation"
                            input-type="password" />
                    </div>

                </card>

                <card>

                    <div class="grid md:grid-cols-2 gap-4">
                        <!-- <select-component id="category_id" name="category_id" title="Sous Category"
                            :options="$page.props.categories" v-model="categoryForm.category_id"
                            :error="categoryForm.errors.category_id" :idKey="true" /> -->

                        <div>
                            <select-component id="status" name="status" title="Status du compte"
                                :options="$page.props.status" v-model="userForm.status"
                                :error="userForm.errors.status" />
                        </div>
                    </div>

                </card>

                <card>
                    <div class="flex items-end justify-end">
                        <button type="submit" @click.prevent="addUser"
                            class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                            Ajouter
                        </button>
                    </div>
                </card>
            </form>

        </section>
    </admin-layout>

</template>
