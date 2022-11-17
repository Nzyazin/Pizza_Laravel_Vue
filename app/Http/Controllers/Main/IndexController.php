<?php

namespace App\Http\Controllers\Main;

use Illuminate\Routing\Controller;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('main.index');
    }
}
