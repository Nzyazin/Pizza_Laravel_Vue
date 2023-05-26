<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
               
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
        //dd($data['mob_number']);
        $data['mob_number'] = filterPhone($data['mob_number']);
        //dd($data['mob_number']);
        User::firstOrCreate($data);

        return redirect()->route('user.index');
    }
}
