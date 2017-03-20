<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Store as SessionStore;

class Authenticate
{

    /**
     * The session store instance.
     *
     * @var \Illuminate\Session\Store
     */
    protected $session;

    /**
     * Authenticate constructor.
     * @param SessionStore $session
     */
    public function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                switch ($guard){
                    case 'user':
                        $this->pushPostDataToSession($request);

                        return redirect()->guest('user/auth');
                        break;
                    case 'admin' :

                        break;
                    case 'employee' :

                        break;
                }
            }
        }

        return $next($request);
    }

    public function pushPostDataToSession($request){
        // custom added functionality
        if($request->method() == 'POST') {
            $this->session->put('url.intended.method', $request->method());

            $this->session->put('url.intended.input', $request->except('file'));

            $this->session->put('url.intended.input.file', []);

            $files = [];
            for($i=0; $i < count($_FILES['file']['name']); $i++){
                $data = [];
                foreach ($_FILES['file'] as $index => $value){
                    $data[$index] = $value[$i];
                }
                array_push($files, $data);
            }

            foreach ($files as $k => $file) {
                $file_name = $file['name'];
                $ext = explode('.', $file_name)[1];
                $file_name = time() . '_'.$k.'.' . $ext;

                $file_path = $file['tmp_name'];

                move_uploaded_file($file_path, 'images/tmp1/' . $file_name);

                $type = pathinfo('images/tmp1/' . $file_name, PATHINFO_EXTENSION);

                $data = file_get_contents('images/tmp1/' . $file_name);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                unlink('images/tmp1/' . $file_name);
                $this->session->push('url.intended.input.file', $base64);
            }
        }
    }
}
