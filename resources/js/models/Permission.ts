import {Role} from "@/models/Role.ts";

export interface Permission{
    id: number,
    name: string,
    guard_name: string,
    roles: Role[]
}
