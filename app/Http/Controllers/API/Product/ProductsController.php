<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Http\Resources\Pizza\PizzaResource;

class ProductsController extends Controller
{
    public function index() {
        $pizzas = Pizza::all();
        return PizzaResource::collection($pizzas);
        /*return Product::get();*/
    }

    public function show(string $id) {
        return new PizzaResource(Product::findOrFail($id));
        /*return $product;*/
    }
}
