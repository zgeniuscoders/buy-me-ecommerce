<script setup lang="ts">
// import { Button } from '@/lib/registry/default/ui/button'
import Button from '@/components/ui/button/Button.vue';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger
} from '@/components/ui/dropdown-menu';
import {Shop} from '@/models/Shop';
import {MoreHorizontal} from 'lucide-vue-next'
import {useForm} from '@inertiajs/vue3';
import {createToaster} from "@meforma/vue-toaster";
import {Order} from "@/models/Order.ts";


const toaster = createToaster()

const {order} = defineProps<{
    order: Order
}>()

defineEmits<{
    (e: 'expand'): void
}>()

const router = useForm({
    orderId: 0
});

const cancelOrder = (orderId: number) => {
    router.orderId = orderId;
    router.put(`/mon-compte/commande/${orderId}/annuler`, {
        onError: () => {
            toaster.error("an expected error occurred")
        },
        onSuccess: () => {
            toaster.warning("your order was canceled successfully")
        }
    })
}

const markAsDelivered = (orderId: number) => {
    router.orderId = orderId;
    router.put(`/mon-compte/commande/${orderId}/livrer`, {
        onError: () => {
            toaster.error("an expected error occurred")
        },
        onSuccess: () => {
            toaster.warning("your order was delivered successfully")
        }
    })
}

</script>

<template>
    <DropdownMenu>
        <DropdownMenuTrigger as-child>
            <Button variant="ghost" class="h-8 w-8 p-0">
                <span class="sr-only">Open menu</span>
                <MoreHorizontal class="h-4 w-4"/>
            </Button>
        </DropdownMenuTrigger>
        <DropdownMenuContent align="end">
            <DropdownMenuLabel>Actions</DropdownMenuLabel>
            <DropdownMenuItem @click="cancelOrder(order.id)" :disabled="order.status == 'canceled'">
                Annuler la commande
            </DropdownMenuItem>
            <DropdownMenuItem @click="markAsDelivered(order.id)" :disabled="order.status == 'canceled'">
                Marquer comme livrer
            </DropdownMenuItem>
            <!--            <DropdownMenuSeparator />-->
            <!--            <DropdownMenuItem>Voir la facture</DropdownMenuItem>-->
        </DropdownMenuContent>
    </DropdownMenu>
</template>
