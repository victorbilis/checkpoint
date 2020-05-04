<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\VerificarController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Twilio\Rest\Client;

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
    protected $redirectTo = '/confirmacao-telefone';

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
        $name = $data["name"];
        $cpf = preg_replace('/[^0-9]/', '', $data["cpf"]);
        $gener = $data["gener"];
        $phone = "+55".preg_replace('/[^0-9]/', '', $data["phone_number"]);
        $email = $data["email"];
        $password = $data["password"];

        try{
            $validarGrid = VerificarController::verificarGrid($cpf);
            if($validarGrid == true){

            $messages = [
                'required' => 'O campo é obrigatório.',
                'sometimes' => 'teste',
                'confirmed' => 'As senhas não estão iguais.',
                'email' => 'Insira um e-mail válido.'
            ];
        
            $rules = [
                'phone_number' => 'required',
                'gener' => 'required',
                'cpf' => 'required',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6|confirmed'
            ];
    
            $validate = Validator::make($data, $rules, $messages);
    
            return $validate;

            }else{

            }
       

        }catch(Exception $e){
            dd($e);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $name = $data["name"];
        $cpf = preg_replace('/[^0-9]/', '', $data["cpf"]);
        $gener = $data["gener"];
        $phone = "+55".preg_replace('/[^0-9]/', '', $data["phone_number"]);
        $email = $data["email"];
        $password = $data["password"];
        
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
        ->verifications
        ->create($phone, "sms");

        return User::create([
            'name' => $name,
            'cpf' => $cpf,
            'gener' => $gener,
            'phone_number' => $phone,
            'email' => $email,
            'password' => bcrypt($data['password']),
        ]);
    }
}
