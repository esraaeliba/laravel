<?php

namespace App\Wishlist;
use App\Models\Product;
use JsonSerializable;

class Wishlist implements JsonSerializable {
    /**
     * @var array product_id => productInfo
     */
    protected $productsMap;

    public function __construct()
    {
        $this->productsMap = [];
    }

    public function addProduct(Product $product, int $count = 1)
    {
        if (empty($this->productsMap[$product->id])) {
            $this->productsMap[$product->id] = new ProductInfo($product, $count);
        } else {
            $this->productsMap[$product->id]->increment($count);
        }
    }

    public function removeProduct(Product $product, int $count = 1)
    {
        if (!empty($this->productsMap[$product->id])) {
            $this->productsMap[$product->id]->decrement($count);
 
            // check if the product should be deleted
            if ($this->productsMap[$product->id]->getCount() <= 0) {
                unset($this->productsMap[$product->id]);
            }
        }
    }

    public function hasProducts() : bool
    {
        return count($this->productsMap) > 0;
    }

    public function getProducts() : array
    {
        return $this->productsMap;
    }

    public function toArray() : array
    {
        $totalPrice = 0;
        foreach($this->productsMap as $id => $productInfo) {
            $totalPrice += $productInfo->getTotalPrice();
        }

        return [
            'products' => $this->productsMap,
            'totalPrice' => $totalPrice,
        ];
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