import axios, { AxiosStatic } from 'axios';

declare global {
    interface Window {
        axios: AxiosStatic;
    }
}

window.axios = axios;

import './echo';
