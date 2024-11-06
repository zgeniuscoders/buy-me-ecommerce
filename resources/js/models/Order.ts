import { Customer } from "./Customer";
import { ProductInterface } from "./ProductType";

export interface Order {
    customer: Customer,
    product: ProductInterface,
    quantity: number,
    status: string
}
