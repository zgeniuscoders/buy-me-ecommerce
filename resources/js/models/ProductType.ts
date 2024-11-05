export type ProductType = {
    id: number
    name: string
    price: number
    image: string,
    qty: number,
    category: Category,
    status: string
};


export interface ProductInterface{
    id: number
    name: string
    price: number
    image: string,
    qty: number,
    category: Category,
    status: string
};


export type Category = {
    id: number,
    name: string
}