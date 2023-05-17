<?php

namespace App\Http\Controllers\Pizza;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pizza\UpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Pizza;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Pizza $pizzas)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $pizzas->update($data);

        return view('pizza.show', compact('pizzas'));
    }
}
