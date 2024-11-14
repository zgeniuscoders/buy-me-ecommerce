<script setup lang="ts">
import adminLayout from '../layouts/adminLayout.vue';
import {useForm, usePage} from '@inertiajs/vue3';
import {createToaster} from "@meforma/vue-toaster";
import {Button} from "@/components/ui/button";
import {Card, CardContent, CardHeader, CardTitle} from "@/components/ui/card";
import {Input} from "@/components/ui/input"
import {Label} from "@/components/ui/label";
import {Select, SelectContent, SelectItem, SelectTrigger, SelectValue} from "@/components/ui/select";

const toaster = createToaster();

const {createUserRoute,roles,status} = usePage().props
const userForm = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    role_id: 1,
    status: 1
})


const addUser = () => {
    userForm.post(createUserRoute, {
        onError: () => {
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
        <div class="container max-w-screen-lg">
            <div class="space-y-4">
                <form action="">
                    <div class="mb-4 flex items-center justify-between space-y-2">
                        <h1 class="text-2xl font-bold tracking-tight">Ajout d'un utilisateur</h1>
                        <div class="flex gap-2">
                            <Button @click.prevent="addUser">Ajouter</Button>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-6 gap-4">
                        <div class="md:col-span-4 space-y-4">
                            <card>

                                <CardHeader>
                                    <CardTitle>Informations générales de l'utilisateur</CardTitle>
                                </CardHeader>
                                <CardContent class="space-y-4">

                                    <div class="space-y-4">
                                        <Label for="name">Nom d'utilisateur</Label>
                                        <Input placeholder="Nom de l'article" v-model="userForm.name" id="name" type="text"/>
                                        <span v-if="userForm.errors.name" class="text-red-400 text-sm">{{
                                                userForm.errors.name
                                            }}</span>
                                    </div>
                                    <div class="space-y-4">
                                        <Label for="email">Adresse email</Label>
                                        <Input placeholder="Nom de l'article" v-model="userForm.email" id="email" type="email" autocomplete="new-password"/>
                                        <span v-if="userForm.errors.email" class="text-red-400 text-sm">{{
                                                userForm.errors.email
                                            }}</span>
                                    </div>

                                </CardContent>

                            </card>

                            <card>

                                <CardHeader>
                                    <CardTitle>Mot de passe</CardTitle>
                                </CardHeader>
                                <CardContent class="space-y-4">

                                    <div class="space-y-4">
                                        <Label for="password">Mot de passe</Label>
                                        <Input placeholder="Entre un mot de passe" v-model="userForm.password"
                                               type="password"
                                               id="password"/>
                                        <span v-if="userForm.errors.password" class="text-red-400 text-sm">{{
                                                userForm.errors.password
                                            }}</span>
                                    </div>
                                    <div class="space-y-4">
                                        <Label for="name">Confirmation mot de passe</Label>
                                        <Input placeholder="Confirmer le mot de passe" type="password"
                                               v-model="userForm.password_confirmation" id="name"/>
                                        <span v-if="userForm.errors.password_confirmation" class="text-red-400 text-sm">{{
                                                userForm.errors.password_confirmation
                                            }}</span>
                                    </div>

                                </CardContent>

                            </card>

                        </div>
                        <div class="md:col-span-2 space-y-4">
                            <card>

                                <CardHeader>
                                    <CardTitle>Status du compte</CardTitle>
                                </CardHeader>
                                <CardContent class="space-y-4">

                                    <div class="space-y-2">
                                        <Select v-model="userForm.status">
                                            <SelectTrigger>
                                                <SelectValue placeholder="Selectioner le status du compte"/>
                                            </SelectTrigger>
                                            <SelectContent>
                                                <template v-for="item in status" :key="item.id">
                                                    <SelectItem :value="item.name">{{ item.name }}</SelectItem>
                                                </template>
                                            </SelectContent>
                                        </Select>
                                        <span v-if="userForm.errors.status" class="text-red-400 text-sm">{{
                                                userForm.errors.status
                                            }}</span>

                                    </div>

                                </CardContent>

                            </card>
                            <card>

                                <CardHeader>
                                    <CardTitle>Role</CardTitle>
                                </CardHeader>
                                <CardContent class="space-y-4">

                                    <div class="space-y-4">
                                        <Label for="password">Role</Label>
                                        <Select v-model="userForm.roles">
                                            <SelectTrigger>
                                                <SelectValue placeholder="Selectioner le status de votre categorie"/>
                                            </SelectTrigger>
                                            <SelectContent>
                                                <template v-for="role in roles" :key="status.id">
                                                    <SelectItem :value="role.id">{{ role.name }}</SelectItem>
                                                </template>
                                            </SelectContent>
                                        </Select>
                                        <span v-if="userForm.errors.roles" class="text-red-400 text-sm">{{
                                                userForm.errors.roles
                                            }}</span>
                                    </div>

                                </CardContent>

                            </card>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </admin-layout>

</template>
