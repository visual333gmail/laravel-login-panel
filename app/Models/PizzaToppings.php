<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaToppings extends Model
{
    use HasFactory;
    
    protected $table = 'toppings';

    public function orders(){
        return $this->belongsTo(OrderItems::class);
    }
}
