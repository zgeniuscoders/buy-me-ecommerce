import {Role} from "@/models/Role.ts";

export type User = {
    id: number,
    name: string,
    email: string,
    profile: string,
    roles: Role[]
}
