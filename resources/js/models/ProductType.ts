export type ProductType = {
    id: number
    name: string
    price: number
    image: string,
    quantity: number,
    category: Category
};

export type Category = {
    id: number,
    name: string
}