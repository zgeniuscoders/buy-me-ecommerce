import {ref} from "vue";
import axios from "axios";

export default function useCart(){

    const cart = ref({})
    const totalPrice = ref(0)
    const response = ref({})

    const getCart = async () => {
        const res = await axios.get('/api/cart')
        cart.value = res.data.data
        totalPrice.value = res.data.totalPrice
    }

    const deleteItem = async (id) => {

    }

    const updateItem = async (id,data) => {
        response.value = await axios.put(`/api/cart/${id}`, data)
    }

    return {
        getCart,
        deleteItem,
        updateItem,
        totalPrice,
        response,
        cart
    }


}
