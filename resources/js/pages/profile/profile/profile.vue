<script setup lang="ts">

import { usePage, Link } from '@inertiajs/vue3';
import accountLayout from '../layouts/accountLayout.vue';
import addressComponent from './components/address.vue';
import updateUserPassword from './components/updateUserPassword.vue';
import updateUserProfileName from './components/updateUserProfileName.vue';
import deleteUserAccount from './components/deleteUserAccount.vue';

import { Address } from '@/models/Address';

const { hasDefineAddress, updateAddressRoute, address, user, addAddressRoute } = usePage().props


</script>

<template>

    <account-layout>
        <section class="py-2 space-y-4 m-2">

            <section>
                <addressComponent v-if="hasDefineAddress" :updateAddresseRoute="updateAddressRoute" :address="address"/>
                <div class="bg-white rounded-md shadow-md p-4" v-else>
                    <div class="rounded-md bg-blue-100 p-4">
                        <h3 class="text-xl font-bold">Adresse</h3>
                        <h4 class="font-medium mt-2">Ajoutez vos premiers produits</h4>
                        <p class="mt-1 text-sm">Dans cette section, nous vous guiderons à travers le processus d'ajout
                            d'un nouvel article sur notre plateforme.s</p>

                        <button type="button"
                            class="bg-gray-800 py-2 px-4 rounded-md text-white mt-4 hover:bg-gray-900">
                            <Link :href="addAddressRoute">
                            Cree un carnet d'adresse
                            </Link>
                        </button>

                    </div>
                </div>
            </section>

            <div class="grid md:grid-cols-2 gap-2">
                <updateUserProfileName />
                <updateUserPassword />
            </div>

            <deleteUserAccount />

        </section>
    </account-layout>

</template>