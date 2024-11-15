<script setup lang="ts">
// import { Button } from '@/lib/registry/default/ui/button'
import Button from '@/components/ui/button/Button.vue';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuTrigger
} from '@/components/ui/dropdown-menu';
import {MoreHorizontal} from 'lucide-vue-next'
import {useForm} from '@inertiajs/vue3';
import {Link} from '@inertiajs/vue3';
import {SocialNetwork} from "@/models/SocialNetwork.ts";
import {createToaster} from "@meforma/vue-toaster";


const toaster = createToaster()

const {social} = defineProps<{
    social: SocialNetwork
}>()

defineEmits<{
    (e: 'expand'): void
}>()


const deleteSocial = (id: number) => {
    const res = confirm("vouslez-vous vraiment supprimer cette lien")
    if (res) {
        const form = useForm({id: id})
        form.delete(`/admin/social-network/${id}`, {
            onError: () => {
                toaster.error("Nous avons rencontré un problème lors du traitement de votre demande. Veuillez réessayer plus tard. Si le problème persiste, contactez notre support technique.")
            },
            onSuccess: () => {
                toaster.success("L'article a été ajouté avec succès. Vous pouvez le consulter dans votre liste d'articles.")
            }
        })
    }
}

function copy(link: string) {
    navigator.clipboard.writeText(link)
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
            <DropdownMenuItem @click="copy(social.link)">
                Copier le lien
            </DropdownMenuItem>
            <DropdownMenuItem>
                <Link :href="`/admin/social-network/${social.id}/edit`">Modifier</Link>
            </DropdownMenuItem>
            <DropdownMenuItem @click="deleteSocial(social.id)">
                Supprimer
            </DropdownMenuItem>
        </DropdownMenuContent>
    </DropdownMenu>
</template>
