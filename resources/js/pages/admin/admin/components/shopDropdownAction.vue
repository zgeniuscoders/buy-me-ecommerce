<script setup lang="ts">
// import { Button } from '@/lib/registry/default/ui/button'
import Button from '@/components/ui/button/Button.vue';
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuLabel, DropdownMenuSeparator, DropdownMenuTrigger } from '@/components/ui/dropdown-menu';
import { Shop } from '@/models/Shop';
import { MoreHorizontal } from 'lucide-vue-next'
import { useForm } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";


const toaster = createToaster()

const { shop } = defineProps<{
    shop: Shop
}>()

defineEmits<{
    (e: 'expand'): void
}>()

const router = useForm({
    shopId: 0
});

const disabledShop = (id: number) => {
    const res = confirm("Voulez-vous vraiment desactiver cette boutique")
    if (res) {
        router.shopId = id
        router.post('/admin/disable-shop', {
            onError: (e) => {
                toaster.error("error")
                console.error(e)
            },
            onSuccess: () => {
                toaster.success("La boutique " + shop.name + "a ete desactiver")
            }
        })
    }

}

const enableShop = (id: number) => {

    router.shopId = id
    router.post('/admin/enable-shop', {
        onError: (e) => {
            toaster.error("error")
            console.error(e)
        },
        onSuccess: () => {
            toaster.success("La boutique " + shop.name + "a ete activer")
        }
    })

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
            <DropdownMenuItem @click="copy(shop.name)">
                Copier le nom de la boutique
            </DropdownMenuItem>
            <DropdownMenuItem @click="disabledShop(shop.id)" v-if="!shop.is_disabled">
                Desactiver
            </DropdownMenuItem>
            <DropdownMenuItem @click="enableShop(shop.id)" v-else>
                Activer
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
