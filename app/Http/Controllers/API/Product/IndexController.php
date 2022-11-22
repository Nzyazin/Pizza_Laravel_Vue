<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Resources\Pizza\PizzaResource;
use App\Models\Pizza;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $pizzas = Pizza::all();
        return PizzaResource::collection($pizzas);
    }
}
