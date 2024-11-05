<template>

    <admin-layout>

    </admin-layout>

</template>


<script setup lang="ts">

import { usePage } from '@inertiajs/vue3';
import adminLayout from '../../layouts/adminLayout.vue';
import { ref } from 'vue';
import { Shop } from '@/models/Shop';
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from "@/components/ui/table"
import { Button } from "@/components/ui/button"
import { Checkbox } from "@/components/ui/checkbox"
import {
    DropdownMenu,
    DropdownMenuCheckboxItem,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from "@/components/ui/dropdown-menu"
import { Input } from "@/components/ui/input"

import { ColumnFiltersState,ExpandedState,SortingState,VisibilityState } from '@tanstack/vue-table';
import { cn } from '@/lib/utils';

const props = usePage().props

const shops = ref<{
    shops: Shop[]
}>()


</script>