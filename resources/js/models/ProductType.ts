export type ProductType = {
    id: number
    name: string
    price: number
    image: string,
    in_stock: boolean,
    category: Category,
    status: string
};


export interface ProductInterface {
    id: number
    name: string
    price: number
    image: string,
    in_stock: boolean,
    category: Category,
    status: string,
    has_delivered: boolean
};


export interface Category {
    id: number,
    name: string,
    status: string
    slug: string,
    category: Category
}
