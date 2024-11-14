<script setup lang="ts">
// import { Button } from '@/lib/registry/default/ui/button'
import Button from '@/components/ui/button/Button.vue';
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } from '@/components/ui/dropdown-menu';
import { Shop } from '@/models/Shop';
import { MoreHorizontal } from 'lucide-vue-next'
import { useForm,Link } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";
import { Category } from '@/models/ProductType';


const toaster = createToaster()

const { category } = defineProps<{
    category: Category
}>()

defineEmits<{
    (e: 'expand'): void
}>()

const deleteCategory = (id: number) => {
    let isDeleted = confirm("voulez-vous vraiment supprimer cette Category ?")
    if (isDeleted) {
        useForm({}).delete("/admin/categories/" + id, {
            onError: (e) => {
                toaster.error("une erreur se produite lors de la suppression de la Category")
            },
            onSuccess: () => {
                toaster.success("la supression a ete effectuer avec success")
            }
        })
    }
}

function copy(id: string) {
    navigator.clipboard.writeText(id)
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
            <DropdownMenuItem @click="copy(category.name)">
                Copier le nom de la categorie
            </DropdownMenuItem>
            <DropdownMenuItem>
                <Link :href="`/admin/categories/${category.id}/edit`">Modifier</Link>
            </DropdownMenuItem>
            <DropdownMenuItem @click="deleteCategory(category.id)">
                Suprimmer
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
