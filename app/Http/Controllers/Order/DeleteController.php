<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Pizza;

class DeleteController extends Controller
{
    public function __invoke(Order $orders)
    {
        $orders->delete();

        return redirect()->route('order.index');
    }
}
