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

        if ($request->isMethod('post') && $request->path() == 'user/order/new') {
            Session::set('request', $request);
        }

        $this->middleware('auth:user');

        if(Auth::guard('user')->check()){
            $this->user = Auth::guard('user')->user();
        }
    }
    
    public function postCreate(Request $request)
    {
        dd('post');
        $this->create($request);
    }

    public function getCreate()
    {
        dd('get');

        if(Session::has('request'))
            $this->create(Session::get('request'));
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

//        return redirect('/');
    }

    public function clearRequestSession(){
        if(Session::has('request'))
            Session::forget('request');

    }
}
