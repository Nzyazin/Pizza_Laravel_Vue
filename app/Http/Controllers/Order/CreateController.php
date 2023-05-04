<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Pizza;

class CreateController extends Controller
{
    public function __invoke()
    {
        $orders = Order::all();
        //dd($orders);
        $pizzas = Pizza::all();;

        $ordersCount = Order::count();
        for ($i = 0; $i < $ordersCount; $i++) {
            $ordersC = $orders[$i];            
            $products = $ordersC->products;            
            $ordersC->products = json_decode($products);            
        }

        return view('order.create', compact('orders', 'pizzas'));
    }
}
