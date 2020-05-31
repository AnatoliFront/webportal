<?php

// namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Hash;
use App\MainUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
class MainUsersController extends Controller
{

        /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\MainUsers
     */
    public function create(Request $data)
    {
        $new_user = MainUsers::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'birdth_date' => $data['birdth_date'],
            'passport_num' => $data['passport_num'],
            'region' => $data['region'],
            'city' => $data['city'],
            'last_name' => $data['last_name'],
            'kind_help' => $data['kind_help'],
            'kind_activity' => $data['kind_activity'],
            'phone' => $data['phone'],
            'login' => $data['login'],
            'password' => Hash::make($data['password']),
        ]);
        return $new_user;
    }
    public function show() {
        return view('requests.registration');
    }

    public function show_v() {
        return view('requests.help_request');
    }

    public function account($id) {
        $user = App\MainUsers::find($id);
        return view('account', compact('user'));
    }

    public function login(Request $request) {
        $response = "0";
        $user = App\MainUsers::where('login', $request['login'])->first();
        if(!$user) {
            return $response;
        } 
        if(Hash::check($request['password'], $user->password) && $user->login == $request['login']) {
            return $user;
        } else {
            return $response;
        }
    }
    public function send_email(Request $request) {

        $user = App\MainUsers::find($id);
        return view('account', compact('user'));
    }
}
