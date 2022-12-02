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
        $users = User::all();
        $orders = Order::all()->whereJsonContains('options->languages', 'en')
            ->get();
        dd($orders);

        return view('order.index', compact('orders', 'users'));
    }
}
