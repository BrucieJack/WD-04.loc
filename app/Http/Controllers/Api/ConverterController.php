<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConverterController extends Controller
{
    public function index(){
        return view('converter.index');
    }

    public function exchange(Request $request){
        $usd = Http::withOptions(['verify' => false])->get('https://www.nbrb.by/api/exrates/rates/USD?parammode=2')->json()['Cur_OfficialRate'];
        $eur = Http::withOptions(['verify' => false])->get('https://www.nbrb.by/api/exrates/rates/EUR?parammode=2')->json()['Cur_OfficialRate'];
        $from = $request->get('from');
        $to = $request->get('to');
        $money = $request->get('money');
        if ($from == $to) {
            $result = 'KEKW';
        }
        if ($from == 'BYN') {
            if ($to = 'USD') {
                $result = $money / $usd;
            }
            elseif ($to = 'EUR') {
                $result = $money / $eur;
            }
        }elseif ($from = 'EUR') {
            if ($to == 'BYN') {
                $result = $money * $eur;
            }elseif ($to == 'USD') {
               $result = ($money * $eur)/$usd;
            } 
        }elseif ($from ='USD') {
            if ($to == 'BYN') {
                $result = $money * $usd;
            }elseif ($to == 'EUR') {
               $result = ($money * $usd)/$eur;
            }      
        }
        
        
        return view('converter.result', compact('result'));
    }

}
