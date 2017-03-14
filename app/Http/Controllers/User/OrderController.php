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
    
    public function postCreate(Request $request)
    {
        dd($request->all());
        $this->create($request);
    }

    public function getCreate()
    {


        if(Session::has('request_obj'))
            $this->create(Session::get('request_obj'));
        else
            return redirect()->back();


    }

    public function create($request)
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

        $this->clearRequestSession();

        dd('ordered');
    }

    public function clearRequestSession(){
        if(Session::has('request_obj'))
            Session::forget('request_obj');

    }
}
