<?php

namespace App\Http\Controllers\Pizza;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pizza\UpdateRequest;
use App\Models\Pizza;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Pizza $pizzas)
    {
        $data = $request->validated();
        $pizzas->update($data);

        return view('pizza.show', compact('pizzas'));
    }
}
