<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    public function customer(){
        return $this->belongsTo(User::class);
    }

    public function pizzas()
    {
        return $this->hasMany(Pizzas::class,'id','pizza_id');
    }
   
    public function pizza_size(){
        
        return $this->hasMany(PizzaSizes::class,'id','size_id');
    }
    public function pizza_toppings(){
       
        return $this->hasMany(PizzaToppings::class,'id','topping_id');
    }
}
