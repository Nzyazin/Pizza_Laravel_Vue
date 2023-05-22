<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class ShowController extends Controller
{
    public function __invoke(Order $orders)
    {   
               
        $products = $orders->products;
        $orders->products = json_decode($products);        
        return view('order.show', compact('orders'));
    }
}
