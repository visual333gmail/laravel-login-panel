<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use App\Models\Pizzas;
use App\Models\PizzaSizes;
use App\Models\PizzaToppings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // return redirect( route('orders'));
    }

    

    public function users_list()
    {
     $users = User::all();
    //  dd($orders);
        return view('users',compact(
            'users'
            
        ));
    }

    
}
