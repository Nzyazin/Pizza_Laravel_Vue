<?php

namespace App\Models;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    const PAID = 1;
    const NOT_PAID = 0;

    protected $table = 'orders';
    protected $casts = ['products' => 'array'];
    protected $guarded = false;

    static function getSatusOfPayment() {
        return [
            self::PAID => 'Оплачено',
            self::NOT_PAID => 'Не оплачено'
        ];
    }

    public function getStatusTitleAttribute() {
        return self::getSatusOfPayment()[$this->gender];
    }

}
