<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $users)
    {
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
        //dd($data['mob_number']);
        $data['mob_number'] = filterPhone($data['mob_number']); 
        $users->update($data);

        return view('user.show', compact('users'));
    }
}
