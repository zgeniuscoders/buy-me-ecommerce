export type ProductType = {
import { Category } from './ProductType';
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


export interface Category{
    id: number,
    name: string,
    status: string
    slug: string,
    category: Category
}