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
}
