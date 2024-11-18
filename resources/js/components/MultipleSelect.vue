<template>
    <Popover v-model="isPopoverOpen" :modal="modalPopover">
        <PopoverTrigger>
            <Button
                ref="buttonRef"
                @click="togglePopover"
                :class="buttonClasses"
            >
                <template v-if="selectedValues.length > 0">
                    <div class="flex justify-between items-center w-full">
                        <div class="flex flex-wrap items-center">
                            <Badge
                                v-for="value in displayedValues"
                                :key="value"
                                :class="badgeClasses"
                                :style="{ animationDuration: `${animation}s` }"
                            >
                                <template v-if="getOption(value)?.icon">
                                    <component :is="getOption(value)?.icon" class="h-4 w-4 mr-2"/>
                                </template>
                                {{ getOption(value)?.label }}
                                <XCircle class="ml-2 h-4 w-4 cursor-pointer" @click.stop="toggleOption(value)"/>
                            </Badge>
                            <template v-if="extraCount > 0">
                                <Badge
                                    class="bg-transparent text-foreground border-foreground/1 hover:bg-transparent"
                                    :class="badgeClasses"
                                    :style="{ animationDuration: `${animation}s` }"
                                >
                                    {{ `+ ${extraCount} more` }}
                                    <XCircle class="ml-2 h-4 w-4 cursor-pointer" @click.stop="clearExtraOptions"/>
                                </Badge>
                            </template>
                        </div>
                        <div class="flex items-center justify-between">
                            <XIcon class="h-4 mx-2 cursor-pointer text-muted-foreground" @click.stop="handleClear"/>
                            <Separator orientation="vertical" class="flex min-h-6 h-full"/>
                            <ChevronDown class="h-4 mx-2 cursor-pointer text-muted-foreground"/>
                        </div>
                    </div>
                </template>
                <template v-else>
                    <div class="flex items-center justify-between w-full mx-auto">
                        <span class="text-sm text-muted-foreground mx-3">{{ placeholder }}</span>
                        <ChevronDown class="h-4 cursor-pointer text-muted-foreground mx-2"/>
                    </div>
                </template>
            </Button>
        </PopoverTrigger>
        <PopoverContent class="w-auto p-0" @keyup.esc="isPopoverOpen = false">
            <Command>
                <CommandInput placeholder="Search..." @keydown="handleInputKeyDown"/>
                <CommandList>
                    <CommandEmpty>No results found.</CommandEmpty>
                    <CommandGroup>
                        <CommandItem @select="toggleAll" class="cursor-pointer" value>
                            <div :class="selectAllClasses">
                                <CheckIcon class="h-4 w-4"/>
                            </div>
                            <span>(Select All)</span>
                        </CommandItem>
                        <CommandItem
                            v-for="option in options"
                            :key="option.value"
                            @select="toggleOption(option.value)"
                            class="cursor-pointer"
                         value>
                            <div :class="optionSelectClasses(option.value)">
                                <CheckIcon class="h-4 w-4"/>
                            </div>
                            <template v-if="option.icon">
                                <component :is="option.icon" class="mr-2 h-4 w-4 text-muted-foreground"/>
                            </template>
                            <span>{{ option.label }}</span>
                        </CommandItem>
                    </CommandGroup>
                    <CommandSeparator/>
                    <CommandGroup>
                        <div class="flex items-center justify-between">
                            <template v-if="selectedValues.length > 0">
                                <CommandItem @select="handleClear" class="flex-1 justify-center cursor-pointer" value>
                                    Clear
                                </CommandItem>
                                <Separator orientation="vertical" class="flex min-h-6 h-full"/>
                            </template>
                            <CommandItem @select="isPopoverOpen = false"
                                         class="flex-1 justify-center cursor-pointer max-w-full" value>
                                Close
                            </CommandItem>
                        </div>
                    </CommandGroup>
                </CommandList>
            </Command>
        </PopoverContent>
        <template v-if="animation > 0 && selectedValues.length > 0">
            <WandSparkles
                :class="sparklesClasses"
                @click="isAnimating = !isAnimating"
            />
        </template>
    </Popover>
</template>

<script setup lang="ts">
import {
    CheckIcon,
    XCircle,
    ChevronDown,
    XIcon,
    WandSparkles,
} from "lucide-vue-next";
import {ref, computed} from 'vue';
import {defineProps} from 'vue';
import {Button} from "@/components/ui/button";
import {
    Command,
    CommandInput,
    CommandList,
    CommandGroup,
    CommandItem,
    CommandSeparator,
    CommandEmpty
} from "@/components/ui/command";
import {Separator} from "@/components/ui/separator";
import {
    Popover,
    PopoverTrigger,
    PopoverContent,
} from "@/components/ui/popover"
import {Badge} from '@/components/ui/badge'
import { cn } from "@/lib/utils";

const props = defineProps({
    options: Array,
    onValueChange: Function,
    defaultValue: {
        type: Array,
        default: () => [],
    },
    placeholder: {
        type: String,
        default: 'Select options',
    },
    animation: {
        type: Number,
        default: 0,
    },
    maxCount: {
        type: Number,
        default: 3,
    },
    modalPopover: {
        type: Boolean,
        default: false,
    },
    className: String,
});

const buttonRef = ref(null);
const isPopoverOpen = ref(false);
const selectedValues = ref(props.defaultValue);
const isAnimating = ref(false);

const togglePopover = () => {
    isPopoverOpen.value = !isPopoverOpen.value;
};

const toggleOption = (option) => {
    const index = selectedValues.value.indexOf(option);
    if (index > -1) {
        selectedValues.value.splice(index, 1);
    } else {
        selectedValues.value.push(option);
    }
    props.onValueChange(selectedValues.value);
};

const handleClear = () => {
    selectedValues.value = [];
    props.onValueChange([]);
};

const clearExtraOptions = () => {
    selectedValues.value = selectedValues.value.slice(0, props.maxCount);
    props.onValueChange(selectedValues.value);
};

const toggleAll = () => {
    if (selectedValues.value.length === props.options.length) {
        handleClear();
    } else {
        selectedValues.value = props.options.map(option => option.value);
        props.onValueChange(selectedValues.value);
    }
};

const handleInputKeyDown = (event) => {
    if (event.key === 'Enter') {
        isPopoverOpen.value = true;
    } else if (event.key === 'Backspace' && !event.currentTarget.value) {
        selectedValues.value.pop();
        props.onValueChange(selectedValues.value);
    }
};

const displayedValues = computed(() => {
    return selectedValues.value.slice(0, props.maxCount);
});

const extraCount = computed(() => {
    return selectedValues.value.length > props.maxCount ? selectedValues.value.length - props.maxCount : 0;
});

const getOption = (value) => {
    return props.options.find(option => option.value === value);
};

const optionSelectClasses = (value) => {
    return {
        'mr-2 flex h-4 w-4 items-center justify-center rounded-sm border border-primary': true,
        'bg-primary text-primary-foreground': selectedValues.value.includes(value),
        'opacity-50 [&_svg]:invisible': !selectedValues.value.includes(value),
    };
};

const selectAllClasses = computed(() => {
    return {
        'mr-2 flex h-4 w-4 items-center justify-center rounded-sm border border-primary': true,
        'bg-primary text-primary-foreground': selectedValues.value.length === props.options.length,
        'opacity-50 [&_svg]:invisible': selectedValues.value.length !== props.options.length,
    };
});

const badgeClasses = computed(() => {
    return {
        'animate-bounce': isAnimating.value,
        // Add other classes as needed
    };
});

const sparklesClasses = computed(() => {
    return {
        'cursor-pointer my-2 text-foreground bg-background w-3 h-3': true,
        'text-muted-foreground': !isAnimating.value,
    };
});
</script>

<style scoped>
/* Add any additional styles here */
</style>
