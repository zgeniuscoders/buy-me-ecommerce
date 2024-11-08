<?php

namespace App\Http\Services;

use App\Ecommerce\Products\Domain\Models\Product;

class Cart
{

    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotalPrice(): float|int
    {
        $totalPrice = 0;
        $productPrices = Product::all()->pluck('price', 'id')->toArray();

        foreach ($this->items as $productId => $item) {
            $totalPrice += $productPrices[$productId] * $item['quantity'];
        }
        return $totalPrice;
    }

    public function getTotalQuantity(): int | float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['quantity'];
        }
        return $total;
    }

    public function add($productId,$product): void
    {
        $quantity = 1;

        if (!isset($this->items[$productId])) {
            $this->items[$productId] = ['quantity' => 0,'product' => $product];
        }

        $this->items[$productId]['quantity'] += $quantity;
    }

    public function update($productId, $qty): void
    {
        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity'] = $qty;
        }
    }

    public function remove($productId): void
    {
        unset($this->items[$productId]);
    }


    public function clear(): void
    {
        $this->items = [];
    }
}

