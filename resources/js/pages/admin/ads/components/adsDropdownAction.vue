<script setup lang="ts">
// import { Button } from '@/lib/registry/default/ui/button'
import Button from '@/components/ui/button/Button.vue';
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } from '@/components/ui/dropdown-menu';
import { Shop } from '@/models/Shop';
import { MoreHorizontal } from 'lucide-vue-next'
import { useForm,Link } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";
import { Category } from '@/models/ProductType';
import {Ads} from "@/models/Ads.ts";


const toaster = createToaster()

const { ads } = defineProps<{
    ads: Ads
}>()

defineEmits<{
    (e: 'expand'): void
}>()

const deleteAds = (id: number) => {
    let isDeleted = confirm("voulez-vous vraiment supprimer cette Publicite ?")
    if (isDeleted) {
        useForm({}).delete("/admin/ads/" + id, {
            onError: () => {
                toaster.error("Nous avons rencontré un problème lors du traitement de votre demande. Veuillez réessayer plus tard. Si le problème persiste, contactez notre support technique.")
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
            <DropdownMenuItem @click="copy(ads.url)">
                Copier le lien de la publicite
            </DropdownMenuItem>
            <DropdownMenuItem>
                <Link :href="`/admin/ads/${ads.id}/edit`">Modifier</Link>
            </DropdownMenuItem>
            <DropdownMenuItem @click="deleteAds(ads.id)">
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
