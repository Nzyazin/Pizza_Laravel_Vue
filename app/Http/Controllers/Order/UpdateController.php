<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Order\UpdateRequest;
use App\Models\Order;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Order $orders)
    {
        $data = $request->validated();
        $orders->update($data);

        return view('order.show', compact('orders'));
    }
}
