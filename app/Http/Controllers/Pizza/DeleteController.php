<?php

namespace App\Http\Controllers\Pizza;

use App\Http\Controllers\Controller;
use App\Models\Pizza;

class DeleteController extends Controller
{
    public function __invoke(Pizza $pizzas)
    {
        $pizzas->delete();

        return redirect()->route('pizza.index');
    }
}
