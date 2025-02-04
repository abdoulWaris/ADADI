<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class statistiqueController extends Controller
{
   public function getStats(){
   $stat = DB::table('transactions')->selectRaw('date_transaction ,count(numero_transaction) as nombre 
   ,sum(montant_payer) as somme')->groupBy('date_transaction')->get();

    return view('statistiques.vision',compact('stat'));
   }
}
