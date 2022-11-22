<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizzas';
    protected $guarded = false;

    public function getImageUrlAttribute() {
        return url('storage/' . $this->preview_image);
    }

}
