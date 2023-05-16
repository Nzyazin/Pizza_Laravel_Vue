<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class ShowController extends Controller
{
    public function __invoke(Order $orders)
    {   
        //dd(count(json_decode($orders->products)));
        // $ordersCount = Order::count();
        // for ($i = 0; $i < count(json_decode($orders->products)); $i++) {
        //     //dd($orders);
        //     $ordersC = $orders->products;
        //     //dd(json_decode($ordersC));
        //     //dd($orders);
        //     $products = json_decode($ordersC->products);            
                       
        //     $ordersC->products = json_decode($products);            
        // }
        
        //dd(json_decode($orders));
        return view('order.show', compact('orders'));
    }
}
