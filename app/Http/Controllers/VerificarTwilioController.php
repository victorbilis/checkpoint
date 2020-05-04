<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;

class VerificarTwilioController extends Controller
{
    public function verificar(Request $request)
    {
        $data = $request->toArray();
        
        $validate = Validator::make($data, [
            'verification_code' => 'required|numeric',
            'phone_number' => 'required|string'
        ]);

        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $data['phone_number']));
            


        if ($verification->valid) {
            $user = User::findOrFail($data['id']);
            $user->isVerified = 1;
            $user->save();
            return view('pages.login-usuario-confirmado');
        }
        return view('pages.login-usuario-nao-confirmado');
    }
}
