<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use GuzzleHttp\Client;


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
    protected $redirectTo = '/home';

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
        //dd(env('BASE_URL_GRID').'dadoscadastrais/v1/consultas/v2/L0001/'.$data["cpf"]);
        $cLink = env('BASE_URL_GRID').'dadoscadastrais/v1/consultas/v2/L0001/'.$data["cpf"];
        $client = new Client();
        $res = $client->request('GET', $cLink,[
            'headers' => [
                'X-Api-Key' => '2b26e357-c3a0-4854-8e5d-3afefb353034'
            ]
        ]);
        $aResponse = json_decode($res->getBody());

        $cpf = $aResponse->content->nome->conteudo->documento;
        $nome = $aResponse->content->nome->conteudo->nome;
        /*if($res->getStatusCode() == 200){
            dd($aResponse);
        }else{
            dd($aResponse);
        } */



        $messages = [
            'required' => 'O campo é obrigatório.',
            'sometimes' => 'teste',
            'confirmed' => 'As senhas não estão iguais.',
            'email' => 'Insira um e-mail válido.'
        ];
    
        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed'
        ];

        $validate = Validator::make($data, $rules, $messages);

        $validate->sometimes(['cpf'], 'required', function ($data) use ($cpf) {
            return $data["cpf"] == $cpf;
        });

        $validate->sometimes(['name'], 'required|string|max:255', function ($data) use ($nome) {
            return $data["name"] == $nome;
        });

        return $validate;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        dd("teste");
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
