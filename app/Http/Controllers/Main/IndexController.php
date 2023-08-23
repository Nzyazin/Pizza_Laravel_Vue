<?php

namespace App\Http\Controllers\Main;

use Illuminate\Routing\Controller;
use App\Models\Pizza;
use App\Models\User;
use App\Models\Order;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        $orders = Order::count();
        $users = User::count();
        $pizzas = Pizza::count();
        return view('main.index', compact('orders', 'pizzas', 'users'));
    }
}
