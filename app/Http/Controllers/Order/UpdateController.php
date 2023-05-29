<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;
use App\Models\Pizza;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Order $orders)
    {
        
        $data = $request->validated();
        //dd($data);
        $pizzas = Pizza::all();
        $users = User::all();

        $products = [];
        $total_price = 0;        

        //Цикл сборки заказа в объект из существующих продуктов
        for ($i = 0; $i < count($data["products"]["quantity"]); $i++) {            
            if ($data["products"]["quantity"][$i] != 0) {
                $total_price += intval($pizzas[$i]["price"]) * intval($data["products"]["quantity"][$i]);
                array_push($products, array(
                    "product" => 
                        array(
                            "id" => $i+1, 
                            "title" => $pizzas[$i]["title"], 
                            "description" => $pizzas[$i]["description"], 
                            "preview_image" => $pizzas[$i]["preview_image"], 
                            "price" => $pizzas[$i]["price"], 
                            "old_price" => $pizzas[$i]["old_price"], 
                            "is_published" => $pizzas[$i]["is_published"]),
                    "quantity" => intval($data["products"]["quantity"][$i])));                               
            }
        }
        
        $data['products'] = json_encode($products);
        $data['total_price'] = $total_price;
        $orders->update($data);        
        $orders['products'] = json_decode($data['products']);

        return view('order.show', compact('orders', 'users'));
    }
}
