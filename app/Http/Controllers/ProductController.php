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

    public function index(Request $request): ProductCollection
    {
        $products = $this->productRepository
            ->getAll();

        if ($request->filled('category')) {
            $products = $products
                ->filterByCategory($request->get('category'));
        }

        if ($request->filled('manufacturer')) {
            $products = $products
                ->filterByManufacturer($request->get('manufacturer'));
        }

        if ($request->filled('priceFrom')) {
            $products = $products
                ->filterByPriceFrom($request->get('priceFrom'));
        }

        if ($request->filled('priceTo')) {
            $products = $products
                ->filterByPriceTo($request->get('priceTo'));
        }

        return new ProductCollection(
            $products
                ->paginate()
        );
    }
}
