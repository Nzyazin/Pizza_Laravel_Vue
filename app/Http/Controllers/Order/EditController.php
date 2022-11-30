<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Order $orders)
    {
        return view('order.edit', compact('orders'));
    }
}
