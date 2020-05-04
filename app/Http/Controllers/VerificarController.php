<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class VerificarController extends Controller
{

    

    public static function verificarGrid($cpf){
        
        try{
            $cLink = env('BASE_URL_GRID').'dadoscadastrais/v1/consultas/v2/L0001/'.$cpf;
            $client = new Client();
            $res = $client->request('GET', $cLink,[
                'headers' => [
                    'X-Api-Key' => '2b26e357-c3a0-4854-8e5d-3afefb353034'
                ]
            ]);
            $aResponse = json_decode($res->getBody());
    
            if($res->getStatusCode() == 200){
                return true;
            }else{
                return false;
            } 
    
            }catch(Exception $e){
                dd($e);
            }

    }
}
