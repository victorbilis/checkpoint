<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Validator;

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

    public function sendMessage(Request $request)
    {
        /*$account_sid = env("TWILIO_SID");
        $auth_token = env("TWILIO_AUTH_TOKEN");
        $twilio_number = env("TWILIO_NUMBER");
        $mensagem = "Código de confirmção Checkpoint: ".;
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($request->phone_number, ['from' => $twilio_number, 'body' => "teste"]);*/
        //return redirect()->route('enviar_mensagem');
        
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($request->phone_number, "sms");
            return view('teste2',['phonenumber' => $request->phone_number]);
    }

    public function verificar(Request $request)
    {
        $data = $request->toArray();
        
        $validate = Validator::make($data, [
            'verification_code' => 'required|numeric',
            'phone_number' => 'required|string'
        ]);
        /* Get credentials from .env */
        //dd($data['phone_number']);
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $data['phone_number']));
        if ($verification->valid) {
            dd('Phone number verified');
        }
       return redirect()->route('teste_twilio2')->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
    }

    public function pdf(Request $request)
    {
        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('pdf.pdf');
        return $pdf->stream();
    }

    public function receita(Request $request)
    {
        $data = $request->toArray();
        
        $validate = Validator::make($data, [
            'verification_code' => 'required|numeric',
            'phone_number' => 'required|string'
        ]);
        /* Get credentials from .env */
        //dd($data['phone_number']);
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $data['phone_number']));
        if ($verification->valid) {
            dd('Phone number verified');
        }
       return redirect()->route('teste_twilio2')->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/login-v3');
    }
}
