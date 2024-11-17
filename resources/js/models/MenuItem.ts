import {Component} from "vue";

export interface MenuItem {
    title: string;
    icon: Component;
    link: string;
    submenus: MenuItem[] | null;
}
