import {Role} from "@/models/Role.ts";

export interface User{
    id: number,
    name: string,
    email: string,
    profile: string,
    roles: Role[]
}
