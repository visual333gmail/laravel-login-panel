<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaSizes extends Model
{
    use HasFactory;

    protected $table = 'sizes';

    public function orders(){
        return $this->belongsTo(OrderItems::class);
    }
}
