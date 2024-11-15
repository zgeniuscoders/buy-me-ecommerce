<script setup lang="ts">
// import { Button } from '@/lib/registry/default/ui/button'
import Button from '@/components/ui/button/Button.vue';
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } from '@/components/ui/dropdown-menu';
import { Shop } from '@/models/Shop';
import { MoreHorizontal } from 'lucide-vue-next'
import { router, useForm } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";
import { ProductInterface } from '@/models/ProductType';
import { Link } from '@inertiajs/vue3';


const toaster = createToaster()

const { product } = defineProps<{
    product: ProductInterface
}>()

defineEmits<{
    (e: 'expand'): void
}>()


const deleteProduct = (id: number) => {
    const res = confirm("vouslez-vous vraiment supprimer cette article")
    if (res) {
        const form = useForm({ id: id })
        form.delete(`/ma-boutique/articles/${id}`, {
            onError: () => {
                toaster.error("Nous avons rencontré un problème lors du traitement de votre demande. Veuillez réessayer plus tard. Si le problème persiste, contactez notre support technique.")
            },
            onSuccess: () => {
                toaster.success("L'article a été ajouté avec succès. Vous pouvez le consulter dans votre liste d'articles.")
            }
        })
        // router.delete(`/ma-boutique/articles/${id}`, {

        // }
        // )
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
                <Link :href="`/ma-boutique/articles/${product.id}/edit`">Modifier</Link>
            </DropdownMenuItem>
            <DropdownMenuItem @click="deleteProduct(product.id)">
                Supprimer
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
