<script setup lang="ts">

import {usePage} from '@inertiajs/vue3';
import accountLayout from '../layouts/accountLayout.vue';
import addressComponent from './components/address.vue';
import updateUserPassword from '@/components/profile/updateUserPassword.vue';
import updateUserProfileName from '@/components/profile/updateUserProfileName.vue';
import deleteUserAccount from '@/components/profile/deleteUserAccount.vue';
import AddressCard from "@/pages/profile/components/addressCard.vue";

const {hasDefineAddress, updateAddressRoute, address, user, addAddressRoute} = usePage().props


</script>

<template>

    <account-layout>
        <section class="py-2 space-y-4 m-2">

            <section>
                <addressComponent v-if="hasDefineAddress" :updateAddresseRoute="updateAddressRoute"
                                  :address="address"/>
                <address-card v-else :addAddressRoute="addAddressRoute"/>

            </section>

            <div class="grid md:grid-cols-2 gap-2">
                <updateUserProfileName :user="user"/>
                <updateUserPassword/>
            </div>

            <deleteUserAccount/>

        </section>
    </account-layout>

</template>
