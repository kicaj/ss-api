<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Models\Product;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductRepository $productRepository
    )
    {}

    public function index()
    {
        $products = $this->productRepository
            ->getPaginate();

        return new ProductCollection($products);
    }
}
