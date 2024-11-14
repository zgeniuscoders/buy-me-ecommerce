import { User } from "./User";

export interface Address {
    user: User | null,
    phone_number: string,
    city: string,
    address: string,
    postal_code: number
}