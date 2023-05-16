<?php

namespace App\Wishlist;

use App\Models\Product;
use JsonSerializable;

class ProductInfo implements JsonSerializable {
    /**
     * @var int $count
     */
    protected $count;

    /**
     * @var Product $product
     */
    protected $product;

    public function __construct(Product $product, int $count)
    {
        $this->product = $product;
        $this->count = $count;
    }
    
    public function getTotalPrice()
    {
        return $this->count * $this->product->price;
    }

    public function increment(int $count = 1)
    {
        $this->count += $count;
    }

    public function decrement(int $count = 1)
    {
        $this->count -= $count;

    }

    public function getCount()
    {
        return $this->count;
    }

    public function toArray() : array
    {
        return [
            'count' => $this->count,
            'product' => $this->product,
            'totalPrice' => $this->getTotalPrice(),
        ];
    }

    public function getProduct() : Product
    {
        return $this->product;
    }

    public function toJSON($options = 0) : string
    {
        return json_encode($this->toArray(), $options);
    }

    public function jsonSerialize() : mixed
    {
        return $this->toArray();
    }
}