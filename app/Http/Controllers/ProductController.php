<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductRepository $productRepository
    )
    {}

    public function index(Request $request)
    {
        $products = $this->productRepository
            ->getAll();

        if ($request->filled('category')) {
            $products = $products
                ->filterByCategory($request->get('category'));
        }

        return new ProductCollection(
            $products
                ->paginate()
        );
    }
}
