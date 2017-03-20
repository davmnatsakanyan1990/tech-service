<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    
    public function index()
    {
        return view('home');
    }
    
    public function makeOrder(Request $request)
    {

        $order = Order::create([
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

        $files = json_decode($request->file);

        $image_data = [];

        foreach ($files as $k => $file){
            $data = [];
            $file_name = $this->fileUpload($file, $k, $order->id);

            $data['name'] = $file_name;
            $data['imageable_type'] = 'orders';
            $data['imageable_id'] = $order->id;

            array_push($image_data, $data);
        }

        DB::table('images')->insert($image_data);
        
    }
    
    public function fileUpload($f, $k, $order_id){
        
        list($type, $f) = explode(';', $f);
        list(, $f)      = explode(',', $f);

        $ext = explode('/', $type)[1];

        $file = base64_decode($f);

        $file_name = time().'_'.$k.'_'.$order_id.'.'.$ext;
        $new  = fopen($_SERVER['DOCUMENT_ROOT'] . '/images/uploads/orders/'.$file_name,'w+');

        fwrite($new, $file);
        fclose($new);
        
        return $file_name;
    }
}
