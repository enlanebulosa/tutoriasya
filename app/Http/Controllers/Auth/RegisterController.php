<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use \Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailer;

use Jrean\UserVerification\Traits\VerifiesUsers; 
use Jrean\UserVerification\Facades\UserVerification;
use Jrean\UserVerification\Traits\RedirectsUsers; 

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
    use VerifiesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
        $this->middleware('guest', ['except' => ['getVerification', 'getVerificationError']]); 
       
    }
     protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'tipo' => 'required',
            'dni' => 'required|min:7|max:8',
        ]);
    }
    
     protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'tipo' => $data['tipo'],
            'dni' => $data['dni'],
            'apellido' => $data['apellido'],
        ]);
        
    }
    /**
     * Version sobreescrita para desactivar el auto login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        
        //$this->guard()->login($this->create($request->all()));
        $user = $this->create($request->all());
        
        UserVerification::generate($user);
        UserVerification::send($user, 'Verifique su correo'); 
        return redirect($this->redirectPath());
    }

   
}
