<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Order;
use App\Models\User;
use App\Models\Pizza;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {       
        $pizzas = Pizza::all();

        $products = [];
        $total_price = 0;
        
        $data = $request->validated();
        //dd($data);

        function filterPhone($phone) {
            $phone = str_replace(array('(', ')', '-', '+', ' ',),'',$phone);
            if (strlen($phone)>=10) {
                $first = mb_substr($phone, 0, 1);
                if ($first == '7' || $first == '8') {
                    $phone = mb_substr($phone, 0);
                }
            }
            return $phone;
        }
        
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

        $data['mob_number'] = filterPhone($data['mob_number']);
        
        //Если номер есть, то заказ добавляется к существующему пользователю
        $user = User::firstOrCreate([
            'mob_number' => $data['mob_number']
        ],[
            'name' => $data['name'],
            'address' => $data['address'],
            'date_of_birth' => $data['date_of_birth'],
        ]);

        //Создание заказа
        $order = Order::create([
            'products' => json_encode($products),
            'user_id' => $user->id,
            'total_price' => $total_price,
        ]);
        return redirect()->route('order.index');
    }
}
