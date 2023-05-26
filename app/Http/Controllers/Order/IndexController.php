<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke()
    {
        
        $orders = Order::all();        
        $ordersCount = Order::count();

        $users = User::all();
        
        for ($i = 0; $i < $ordersCount; $i++) {
            $ordersC = $orders[$i];     
            $products = $ordersC->products;            
            $ordersC->products = json_decode($products);       
        }
        return view('order.index', compact('orders', 'users'));
    }
}
