<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;
//    protected $redirectTo = RouteServiceProvider::ORDERS_MANAGEMENT;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {


          return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
//        dd($user);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
//    public function register(Request $request)
//    {
//        $user= User::all();
//
//        $this->validator($request->all())->validate();
//
//        event(new Registered($user = $this->create($request->all())));
//        // Add the role ID based on the condition
//        if($user->count() == 0){
//            $user->role_id = 1; // Set the role ID to the admin role
//        } else {
//            $user->role_id = 2; // Set the role ID to the default user role
//        }
//
//        $user->save();
//
//        Auth::login($user);
//
//        return redirect($this->redirectTo);
//    }


    protected function create(array $data)
    {
        $users = User::all();
        if($users->count() == 0){
            $role_id = 1;
        }else{
            $role_id = 3;
       }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $role_id,
        ]);
//        dd($user);



    }
}




