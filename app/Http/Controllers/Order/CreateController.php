<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('order.create');
    }
}
