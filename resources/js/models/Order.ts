import {ProductInterface} from "./ProductType";
import {Address} from "@/models/Address.ts";
import {Customer} from "@/models/Customer.ts";

export interface Order {
    id: number,
    customer: Customer,
    address: Address,
    product: ProductInterface,
    quantity: number,
    status: string
}
