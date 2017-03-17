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

    /**
     * Show user orders list
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){

        $orders = Order::where('user_id', $this->user->id);

        // filter by date-from
        if($request->has('from'))
            $orders = $orders->where('created_at', '>=', $request->from);

        // filter by date-to
        if($request->has('to'))
            $orders = $orders->where('created_at', '<=', $request->to);

        $orders = $orders->get();
        
        return view('user.orders', compact('orders'));
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
