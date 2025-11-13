<?php

namespace App\Repositories;

use App\Builders\ProductBuilder;
use App\Interfaces\ProductInterface;
use App\Models\Product;

readonly class ProductRepository implements ProductInterface
{
    public function __construct(
        private Product $product
    )
    {}

    public function getAll(): ProductBuilder
    {
        return $this->product
            ->with('manufacturer');
    }
}
