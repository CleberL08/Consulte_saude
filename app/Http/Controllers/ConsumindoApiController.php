<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Pais;
use App\Models\Estado;
use App\Models\Cidade;

use function GuzzleHttp\json_decode;

class ConsumindoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        // dd($novoData);
        
        
        return view('consumindo', ['novoData' => $novoData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
