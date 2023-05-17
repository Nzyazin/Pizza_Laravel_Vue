<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use App\Models\Pizza;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Order $orders)
    {
        //dd($orders);
        $pizzas = Pizza::all();
        return view('order.edit', compact('orders', 'pizzas'));
    }
}
