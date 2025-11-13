<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class ProductBuilder extends Builder
{
    public function filterByCategory(string $category): self
    {
        return $this
            ->where('products.category', $category);
    }

    public function filterByManufacturer(int $manufacturer): self
    {
        return $this
            ->where('products.manufacturer_id', $manufacturer);
    }

    public function filterByPriceFrom(string|int|float $priceFrom): self
    {
        return $this
            ->where('products.price', '>=', $priceFrom);
    }

    public function filterByPriceTo(string|int|float $priceTo): self
    {
        return $this
            ->where('products.price', '<=', $priceTo);
    }
}
