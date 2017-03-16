<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected  $user;
    
    public function __construct(Request $request)
    {
        $this->middleware('auth:user');

        if(Auth::guard('user')->check()){
            $this->user = Auth::guard('user')->user();
        }
    }
    
    public function index(){
        $orders = Order::where('user_id', $this->user->id)->get();
        dd($orders);
    }

    public function create(Request $request)
    {
        Order::create([
            'user_id' => $this->user->id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'title' => $request->title,
            'category' => $request->category,
            'priority' => $request->priority,
            'description' => $request->description,
            'date' => $request->date,
            'expected' => $request->expected
        ]);

        return redirect('user/orders')->send();
    }
}
