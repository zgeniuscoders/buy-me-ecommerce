/**
 * v0 by Vercel.
 * @see https://v0.dev/t/4wXaNrXUoZd
 * Documentation: https://v0.dev/docs#integrating-generated-code-into-your-nextjs-app
 */
import { Select, SelectTrigger, SelectValue, SelectContent, SelectItem } from "@/components/ui/select"
import { Card, CardHeader, CardTitle, CardContent, CardFooter } from "@/components/ui/card"
import { Separator } from "@/components/ui/separator"
import { Button } from "@/components/ui/button"

export default function Component() {
  return (
    <div className="grid md:grid-cols-[1fr_300px] gap-8 max-w-6xl mx-auto px-4 md:px-6 py-12">
      <div className="grid gap-6">
        <div className="grid gap-4">
          <h1 className="text-2xl font-bold">Shopping Cart</h1>
          <p className="text-gray-500 dark:text-gray-400">Review the items in your cart and proceed to checkout.</p>
        </div>
        <div className="grid gap-4">
          <div className="grid gap-4 border rounded-lg overflow-hidden">
            <div className="grid grid-cols-[100px_1fr_100px] items-center gap-4 bg-gray-100 dark:bg-gray-800 px-4 py-3">
              <span className="font-medium">Product</span>
              <span className="font-medium">Price</span>
              <span className="font-medium text-right">Quantity</span>
            </div>
            <div className="grid grid-cols-[100px_1fr_100px] items-center gap-4 px-4 py-3 border-t dark:border-gray-700">
              <img
                src="/placeholder.svg"
                alt="Product Image"
                width={100}
                height={100}
                className="rounded-md object-cover"
                style={{ aspectRatio: "100/100", objectFit: "cover" }}
              />
              <div className="grid gap-1">
                <h3 className="font-medium">Acme Circles T-Shirt</h3>
                <p className="text-gray-500 dark:text-gray-400 text-sm">
                  60% combed ringspun cotton/40% polyester jersey tee.
                </p>
              </div>
              <div className="flex items-center justify-end gap-2">
                <span className="font-medium">$99.00</span>
                <Select defaultValue="1" className="w-24">
                  <SelectTrigger>
                    <SelectValue placeholder="Qty" />
                  </SelectTrigger>
                  <SelectContent>
                    <SelectItem value="1">1</SelectItem>
                    <SelectItem value="2">2</SelectItem>
                    <SelectItem value="3">3</SelectItem>
                    <SelectItem value="4">4</SelectItem>
                    <SelectItem value="5">5</SelectItem>
                  </SelectContent>
                </Select>
              </div>
            </div>
            <div className="grid grid-cols-[100px_1fr_100px] items-center gap-4 px-4 py-3 border-t dark:border-gray-700">
              <img
                src="/placeholder.svg"
                alt="Product Image"
                width={100}
                height={100}
                className="rounded-md object-cover"
                style={{ aspectRatio: "100/100", objectFit: "cover" }}
              />
              <div className="grid gap-1">
                <h3 className="font-medium">Acme Prism T-Shirt</h3>
                <p className="text-gray-500 dark:text-gray-400 text-sm">
                  60% combed ringspun cotton/40% polyester jersey tee.
                </p>
              </div>
              <div className="flex items-center justify-end gap-2">
                <span className="font-medium">$99.00</span>
                <Select defaultValue="1" className="w-24">
                  <SelectTrigger>
                    <SelectValue placeholder="Qty" />
                  </SelectTrigger>
                  <SelectContent>
                    <SelectItem value="1">1</SelectItem>
                    <SelectItem value="2">2</SelectItem>
                    <SelectItem value="3">3</SelectItem>
                    <SelectItem value="4">4</SelectItem>
                    <SelectItem value="5">5</SelectItem>
                  </SelectContent>
                </Select>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="grid gap-4">
        <Card>
          <CardHeader>
            <CardTitle>Order Summary</CardTitle>
          </CardHeader>
          <CardContent className="grid gap-4">
            <div className="flex items-center justify-between">
              <span>Subtotal</span>
              <span className="font-medium">$198.00</span>
            </div>
            <div className="flex items-center justify-between">
              <span>Shipping</span>
              <span className="font-medium">$0.00</span>
            </div>
            <Separator />
            <div className="flex items-center justify-between font-medium text-lg">
              <span>Total</span>
              <span>$198.00</span>
            </div>
          </CardContent>
          <CardFooter>
            <Button size="lg" className="w-full">
              Proceed to Checkout
            </Button>
          </CardFooter>
        </Card>
      </div>
    </div>
  )
}
