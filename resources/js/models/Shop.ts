import { User } from "./User"

// export type Shop = {
//     name: string,
//     slug: string,
//     image: string,
//     cover_image: string,
//     description: string,
//     social_networks: string,
//     user: User
// }

export interface Shop {
    id: number,
    name: string,
    slug: string,
    image: string,
    cover_image: string,
    description: string,
    social_networks: string,
    user: User
    is_disabled: boolean
}