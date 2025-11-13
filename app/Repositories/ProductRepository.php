<?php

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;

readonly class ProductRepository implements ProductInterface
{
    public function __construct(
        private Product $product
    )
    {}

    public function getAll(): Product
    {
        return $this->product;
    }
}
