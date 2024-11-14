import {router} from "@inertiajs/vue3";
export function logout(){
    router.post('/logout', {
        onError: () => {
            console.log("logout error");
        }, onSuccess: () => {
            location.reload();
        }
    })
}
