<script setup lang="ts">
// import { Button } from '@/lib/registry/default/ui/button'
import Button from '@/components/ui/button/Button.vue';
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } from '@/components/ui/dropdown-menu';
import { MoreHorizontal } from 'lucide-vue-next'
import { useForm,Link } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";
import {Role} from "@/models/Role.ts";
import {User} from "@/models/User.ts";


const toaster = createToaster()

const { user } = defineProps<{
    user: User
}>()

defineEmits<{
    (e: 'expand'): void
}>()

const deleteUser = (id: number) => {
    let isDeleted = confirm("voulez-vous vraiment supprimer cette Utilisateur ?")
    if (isDeleted) {
        useForm({}).delete("/admin/utilisateurs/" + id, {
            onError: () => {
                toaster.error("une erreur se produite lors de la suppression de l'Utilisateur")
            },
            onSuccess: () => {
                toaster.success("la supression a ete effectuer avec success")
            }
        })
    }
}

</script>

<template>
    <DropdownMenu>
        <DropdownMenuTrigger as-child>
            <Button variant="ghost" class="h-8 w-8 p-0">
                <span class="sr-only">Open menu</span>
                <MoreHorizontal class="h-4 w-4" />
            </Button>
        </DropdownMenuTrigger>
        <DropdownMenuContent align="end">
            <DropdownMenuLabel>Actions</DropdownMenuLabel>
            <DropdownMenuItem>
                <Link :href="`/admin/utilisateurs/${user.id}/edit`">Modifier</Link>
            </DropdownMenuItem>
            <DropdownMenuItem @click="deleteUser(user.id)">
                Desactiver
            </DropdownMenuItem>


            <!-- <DropdownMenuItem @click="$emit('expand')">
                Expand
            </DropdownMenuItem> -->
            <!-- <DropdownMenuSeparator />
            <DropdownMenuItem>View Customer</DropdownMenuItem>
            <DropdownMenuItem>View payment details</DropdownMenuItem> -->
        </DropdownMenuContent>
    </DropdownMenu>
</template>
