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
    name: string,
    slug: string,
    image: string,
    cover_image: string,
    description: string,
    social_networks: string,
    user: User
    is_diablabed: string
}