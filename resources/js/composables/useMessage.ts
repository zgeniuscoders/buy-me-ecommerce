import {ref} from "vue";
import {Message} from "@/models/Message.ts";
import axios from "axios";

export const useMessage = () => {

    const messages = ref<Message[]>()

    const getMessages = async (receiverId: number) => {
        await axios.get(`/messages/${receiverId}`)
            .then(res => {
                messages.value = res.data.data as Message[]
            }).catch(err => {
                console.error(err)
            })
    }

    const sendMessage = async (message: {message: string, receiverId: number}) => {
        await axios.post(`/messages`, message).catch(err => {
            console.error(err)
        })
    }

    return {
        messages,
        getMessages,
        sendMessage
    }
}
