<?php
namespace App\Http\Controllers\User\Auth;
//use App\Http\Requests\Request;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Session\Store as SessionStore;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Post\PostFile;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $guard = 'user';
    protected $redirectAfterLogout = 'user/auth';

    protected $session;
    protected $method;
    protected $input;
    protected $path;
    protected $headers;

    /**
     * AuthController constructor.
     * @param SessionStore $session
     */
    public function __construct(SessionStore $session)
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->session  = $session;
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function authenticated($request,$user)
    {
//        if ($this->session->get('url.intended.method') == "POST") {
//            $this->intended();
//        }

        return redirect()->intended($this->redirectPath());
    }

    public function registered($request,$user)
    {
        return redirect()->intended($this->redirectPath());
    }
//    public function intended(){
//
//        if ($this->session->has('url.intended.method')) {
//            $this->method = $this->session->pull('url.intended.method');
//        }
//
//        if ($this->session->has('url.intended.input')) {
//            $this->input = $this->session->pull('url.intended.input');
//            $this->input['user_id'] = Auth::guard('user')->user()->id;
//        }
//
//        if ($this->session->has('url.intended.headers')) {
//            $this->headers = $this->session->pull('url.intended.headers');
//        }
//        
//        $this->path = $this->session->pull('url.intended.path');
//
//        $ch = curl_init();
//
//        curl_setopt($ch, CURLOPT_URL, "http://tech_service.dev/order/new");
//
//        curl_setopt($ch, CURLOPT_POST, true);
//
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->input);
//
//
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//        curl_exec($ch);
//
//        return redirect('orders')->send();
//
//    }

    /**
     * Show the application auth form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAuthForm()
    {
        return view('user.auth.index');
    }
}