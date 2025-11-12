<?php

namespace App\Repositories;

use App\Builders\Stripe;
use App\Interfaces\ProductInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

readonly class ProductRepository implements ProductInterface
{
    public function __construct(
        private Product $product
    )
    {}

    public function getPaginate()
    {
        return $this->product
            ->with('manufacturer')
            ->paginate();
    }
}
