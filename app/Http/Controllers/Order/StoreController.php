<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Order;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $orders = Order::all();
       

        $ordersCount = Order::count();
        for ($i = 0; $i < $ordersCount; $i++) {
            
                       
        }        
        
        $data = $request->validated();

        for ($i = 0; $i < count($data["products"]["quantity"]); $i++) {
            $ordersC = $orders[$i]; 
                       
            $products = $ordersC->products;  
                    
            $ordersC->products = json_decode($products);
            
            if ($data["products"]["quantity"][$i] != 0) {
                //dd($ordersC->products[$i]['quantity']);
                $ordersC->products[$i]['quantity'] = intval($data["products"]["quantity"][$i]);
                dd($ordersC->products[$i]['quantity']);
                
            }
        }
        
        dd($data["products"]["quantity"]);

        $user = User::firstOrCreate([
            'mob_number' => $data['mob_number']
        ],[
            'name' => $data['name'],
            'address' => $data['address'],
            'date_of_birth' => $data['date_of_birth'],
        ]);

        $order = Order::create([
            'user_id' => $user->id,
        ]);
        return new OrderResource($order);
    }
}
