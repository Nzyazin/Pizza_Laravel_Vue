<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(Order $orders)
    {   
        $users = User::all();
        $products = $orders->products;
        $orders->products = json_decode($products);        
        return view('order.show', compact('orders', 'users'));
    }
}
