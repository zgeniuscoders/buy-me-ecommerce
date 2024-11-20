import {type ClassValue, clsx} from 'clsx'
import {twMerge} from 'tailwind-merge'
import type {Updater} from '@tanstack/vue-table'
import type {Ref} from 'vue'

export function cn(...inputs: ClassValue[]) {
    return twMerge(clsx(inputs))
}

export function valueUpdater<T extends Updater<any>>(updaterOrValue: T, ref: Ref) {
    ref.value
        = typeof updaterOrValue === 'function'
        ? updaterOrValue(ref.value)
        : updaterOrValue
}

export function readFileData(file) {
    return URL.createObjectURL(file)
}

export function timeAgo(timestamp: string) {
    const now = Date.now();
    const secondsAgo = Math.floor((now - new Date(timestamp)) / 1000);

    const formatter = new Intl.RelativeTimeFormat("fr", { numeric: "auto" });
    const intervals = [
        { unit: "year", seconds: 31536000 },
        { unit: "month", seconds: 2592000 },
        { unit: "week", seconds: 604800 },
        { unit: "day", seconds: 86400 },
        { unit: "hour", seconds: 3600 },
        { unit: "minute", seconds: 60 },
        { unit: "second", seconds: 1 },
    ];

    for (const { unit, seconds } of intervals) {
        const count = Math.floor(secondsAgo / seconds);
        if (count > 0) {
            return formatter.format(-count, unit);
        }
    }
    return "à l'instant";
}
