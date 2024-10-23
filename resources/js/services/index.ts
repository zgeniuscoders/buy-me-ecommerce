import {ref} from "vue";
import axios from "axios";


export default function useOrder(){
    const response = ref({})

    const proceedToCheckout = async (data) => {
        response.value = (await axios.post('/api/procced-to-checkout', data)).data
        console.log(response.value);
    }

    return {
        proceedToCheckout
    }
}