<?php

namespace App\Http\Controllers\API\Order;

use App\Http\Requests\API\Order\StoreRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Order;
use App\Models\User;
use Illuminate\Routing\Controller;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $user = User::firstOrCreate([
            'mob_number' => $data['mob_number']
        ],[
            'name' => $data['name'],
            'address' => $data['address'],
            'date_of_birth' => $data['date_of_birth'],
        ]);

        $order = Order::create([
            'products' => json_encode($data['products']),
            'user_id' => $user->id,
            'total_price' => $data['total_price'],
        ]);
        return new OrderResource($order);
    }
}
