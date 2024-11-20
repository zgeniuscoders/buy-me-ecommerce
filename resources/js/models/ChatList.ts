import {Message} from "@/models/Message.ts";

export interface ChatList {
    id: number,
    profile: string | null,
    name: string,
    email: string,
    messages: Message[]
}
