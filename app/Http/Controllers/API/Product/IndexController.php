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
        //dd($pizzas);
        /*$data = $pizzas->toArray();
        $ordersCount = Order::count();
        for ($i = 0; $i < $ordersCount; $i++) {
            $ordersC = $orders[$i];
            $products = $ordersC->products;
            $ordersC->products = json_decode($products);
        }
        return PizzaResource::collection($pizzas);*/
        return Pizza::get();
    }
}
