<?php

namespace App\Interfaces;

use App\Models\Product;

interface ProductInterface
{
    public function getAll(): Product;
}
