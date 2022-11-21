<?php

namespace App\Http\Controllers\Pizza;

use App\Http\Controllers\Controller;
use App\Models\Pizza;

class ShowController extends Controller
{
    public function __invoke(Pizza $pizzas)
    {
        return view('pizza.show', compact('pizzas'));
    }
}
