<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class ConsumindoApiController extends Controller
{
    public function loadApi(Request $request)
    {
        $data = $request->all();
        $pickedState = $data['estadosPick'];
        $pickedCity = $data['cidadesPick'];

        $sql = "Select estado.est_sgl from estado where est_cod = '$pickedState'";
        $pickedState = DB::select($sql);
        $sql = "Select cidade.cid_nome from cidade where cid_cod = '$pickedCity'";
        $pickedCity = DB::select($sql);

        foreach ($pickedState as $pickS) {
            foreach ($pickedCity as $pickC) {
                $url = "https://api.brasil.io/v1/dataset/covid19/caso_full/data/?search=&epidemiological_week=&date=&order_for_place=&state=" . $pickS->est_sgl . "&city=" . $pickC->cid_nome . "&city_ibge_code=&place_type=&last_available_date=&is_last=&is_repeated=";
            }
        }

        $response = Http::withHeaders(['Authorization' => 'Token 880782cedecb384f6872b14637181d48a1a0b840'])->get($url);
        $datas = $response->json();


        $novoData = $datas['results'][0];
     

        $urlBrazilData = "https://www.worldometers.info/coronavirus/country/brazil/";

        $brazilData = file_get_contents($urlBrazilData);
        $recoveredData = explode('<span>',  $brazilData);
        $newRecoveredData = $recoveredData[2];
        $endRecoveredData = explode('</span>', $newRecoveredData);
        $endNewRecoveredData = $endRecoveredData[0];



        return view(
            'home/consumindo',
            [
                'novoData' => $novoData,
                'recoveredBrazilData' => $endNewRecoveredData
            ]
        );
    }

}
