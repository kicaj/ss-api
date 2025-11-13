<?php

namespace App\Interfaces;

use App\Builders\ProductBuilder;

interface ProductInterface
{
    public function getAll(): ProductBuilder;
}
