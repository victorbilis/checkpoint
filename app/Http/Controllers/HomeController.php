<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\User;
use Illuminate\Support\Facades\Validator;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    

    public function receita()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        
        $teste = "whatsapp:+5519998517324";
        $verification = $twilio->messages
        ->create("whatsapp:+5519998517324", // to
                 [
                     "mediaUrl" => ['https://owlhost.com.br/docs/receita.pdf'],
                     "from" => "whatsapp:+14155238886",
                     "body" => "Olá, aqui esta sua receita."
                 ]
        );

       return response()->download(storage_path('app\public\receitas\receita.pdf'));
    }
    
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/dashboard-v2');
    }
}
