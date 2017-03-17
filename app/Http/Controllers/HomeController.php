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
    
    public function makeOrder(Request $request){

        Order::create([
            'user_id' => $request->user_id,
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
        
        $file_name = $this->fileUpload($request);
        
    }
    
    public function fileUpload($request){
        $file=$request->file;
        list($type, $file) = explode(';', $file);
        list(, $file)      = explode(',', $file);

        $ext = explode('/', $type)[1];

        $file = base64_decode($file);

        $file_name = time().'.'.$ext;
        $new  = fopen($_SERVER['DOCUMENT_ROOT'] . '/images/uploads/orders/'.$file_name,'w+');

        fwrite($new, $file);
        fclose($new);
        
        return $file_name;
    }
}
