<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $casts = ['products' => [
        'title' => 'value',
        'price' => 'value',
        'qty' => 'value'
    ]];
    protected $guarded = false;
}
