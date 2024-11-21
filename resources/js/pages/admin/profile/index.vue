<script setup lang="ts">

import AdminLayout from "@/pages/admin/layouts/adminLayout.vue";
import UpdateUserProfileName from "@/components/profile/updateUserProfileName.vue";
import UpdateUserPassword from "@/components/profile/updateUserPassword.vue";
import {usePage} from "@inertiajs/vue3";

const {user} = usePage().props

</script>

<template>
    <admin-layout>
        <div class="py-2 space-y-4 m-2">
            <div class="grid md:grid-cols-2 gap-2">
                <update-user-profile-name :user="user"/>
                <update-user-password/>
            </div>
        </div>
    </admin-layout>
</template>

<style scoped>

</style>
