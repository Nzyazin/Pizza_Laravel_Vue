<?php

namespace App\Http\Controllers\Pizza;

use App\Models\Pizza;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Pizza $pizzas)
    {
        return view('pizza.edit', compact('pizzas'));
    }
}
