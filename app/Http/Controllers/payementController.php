<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class payementController extends Controller
{

    public function index(){
        return view('paiement.index');
    }

    public function getPaiementAndStatus(Request $request){
        $request->validate([
            'amount' => ['required']
        ]);

        $transaction_id='LGD'.date('Y').date('m').date('d').'.'.date('h').date('m').'.C'.rand(5,100000);
        $amount = $request->amount;

       $paie= self::PayinWithRedirection($transaction_id, $amount);
       $tokenApi = $paie["token"];
       $statut= self::StatusPayin($tokenApi);
       //dd($paie);
       $code =$paie["response_code"];
      if(!empty($paie["response_code"]) and $code==00) {
        $responseText = $paie["response_text"];

        $transac = new transaction();
        $transac->user_id = Auth::user()->id;
        $transac->email = Auth::user()->email;
        $transac->numero_transaction = $transaction_id;
        $transac->montant_payer = $amount;
        $transac->statut_transaction = $statut->status;
        $transac->date_transaction = Carbon::now();
        $transac->Token = $paie["token"]; 
        $transac->save();
        return view('paiement.notification', ['responseText' => $responseText]); 
    }
    if($statut->status=="completed"){
        $transac = transaction::where('numero_transaction',$transaction_id);
        $transac->statut_transaction = $statut->status;
        $transac->save();
        return view('paiement.success',compact('transac'));
    }elseif($statut->status=="pending"){
        $transac = transaction::where('numero_transaction',$transaction_id);
        $transac->statut_transaction = $statut->status;
        $transac->save();
        return view('paiement.pending',compact('transac'));
    }elseif($statut->status=="nocompleted"){
        $transac = transaction::where('numero_transaction',$transaction_id);
        $transac->statut_transaction = $statut->status;
        $transac->save();
        return view('paiement.cancel',compact('transac'));
    
    }
    //    $am = session()->put('Ar', $amount);
    //    $jeton = $paie->token;

       //enregistement des données dans la session
       //$token = session()->put('InvoiceToken', $jeton);

    //    $responseText = $paie["response_text"];

    // // Faites ce que vous voulez avec $responseText
    // return view('payement.notification', ['responseText' => $responseText]);
   
    }

   public function getTransactions(){
    $list=transaction::all();
    return view('transactions.list',compact('list'));
   }

    public function getStatus(Request $request){
        $result = self::StatusPayin($token);
        $stat=new transaction();
    }
    

        public function PayinWithRedirection($transaction_id, $amount)
        {
            // Crée une requête HTTP POST à l'URL de paiement avec les en-têtes définis
            $response = Http::withHeaders([
                "Apikey" => "1Y9GYNQHHCPSUQO9U",
                "Authorization" => "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF9hcHAiOiI3NzQiLCJpZF9hYm9ubmUiOjg5OTQyLCJkYXRlY3JlYXRpb25fYXBwIjoiMjAyMy0wMi0wMSAxOTozNDowNSJ9.CrkksYoYvihtI2m2KvBVu1l58XO8Y2F2phc3VPYrv7U",
                "Accept" => "application/json",
                "Content-Type" => "application/json",
            ])->withoptions([
                'verify' => false,
            ])->post("https://app.ligdicash.com/pay/v01/redirect/checkout-invoice/create", [
                "commande" => [
                    "invoice" => [
                        "items" => [
                            [
                                "name" => "Casier",
                                "description" => "Huile pour moteur",
                                "quantity" => 1,
                                "unit_price" => $amount,
                                "total_price" => $amount,
                            ],
                        ],
                        "total_amount" => $amount,
                        "devise" => "XOF",
                        "description" => "Huile moteur",
                        "customer" => "",
                        "customer_firstname" => "Prenom du client",
                        "customer_lastname" => "Nom du client",
                        "customer_email" => "drissa.barro07@yahoo.fr",
                    ],
                    "store" => [
                        "name" => "Apps",
                        "website_url" => "https://nos3s.com",
                    ],
                    "actions" => [
                        "cancel_url" => route('payement.status'),
                        "return_url" => route('payement.status'),
                        "callback_url" => route('payement.status'),
                    ],
                    "custom_data" => [
                        "transaction_id" => $transaction_id,
                    ],
                ],
            ]);
    
            // Retourne la réponse de l'API de paiement au format JSON
            return $response->json();
        }

// gestion des statuts du paiement
        function StatusPayin($Token){
	
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://app.ligdicash.com/pay/v01/redirect/checkout-invoice/confirm/?invoiceToken=".$Token,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_SSL_VERIFYHOST => false,
              CURLOPT_SSL_VERIFYPEER => false,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "Apikey: 1Y9GYNQHHCPSUQO9U",
                "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF9hcHAiOiI3NzQiLCJpZF9hYm9ubmUiOjg5OTQyLCJkYXRlY3JlYXRpb25fYXBwIjoiMjAyMy0wMi0wMSAxOTozNDowNSJ9.CrkksYoYvihtI2m2KvBVu1l58XO8Y2F2phc3VPYrv7U"
              ),
            ));
            $response = json_decode(curl_exec($curl));
            curl_close($curl);
            
            return $response;
            }
            
    }
    


