<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    
    public function index()
    {
        return view('home');
    }
    
//    public function makeOrder(Request $request){
//        Order::create([
//            'user_id' => $request->user_id,
//            'name' => $request->name,
//            'email' => $request->email,
//            'address' => $request->address,
//            'title' => $request->title,
//            'category' => $request->category,
//            'priority' => $request->priority,
//            'description' => $request->description,
//            'date' => $request->date,
//            'expected' => $request->expected
//        ]);
//    }
}
