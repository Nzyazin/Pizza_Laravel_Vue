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
        $array[] = [];
        $ordersCount = Order::count();
        for ($i = 1; $i < $ordersCount +1; $i++) {
            $orders = Order::find($i);
            $products = $orders->products;
            $orders->products = $products;
            $orders->toArray();
            array_push($array, $orders->toArray());
        }
        /*foreach($yourArrayName as $object)
        {
            $arrays[] = $object->toArray();
        }*/

        return view('order.index', compact('array'));
    }
}
