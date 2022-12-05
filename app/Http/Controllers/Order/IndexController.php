<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Pizza;


class IndexController extends Controller
{
    public function __invoke()
    {

        $orders = Order::all();
        $ordersA = json_decode($orders, true);
        dd($ordersA);
        /*$ordersCount = Order::count();
        for ($i = 1; $i < $ordersCount +1; $i++) {
            $ordersC = Order::find($i);
            $products = $ordersC->products;
            $ordersC->products = $products;
            $ordersC->toArray();
            array_push($array, $ordersC->toArray());
        }
        dd($array);*/

        return view('order.index', compact('orders', 'ordersA'));
    }
}
