<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Estado;
use App\Models\Cidade;
use Illuminate\Support\Facades\DB;

class PopularSelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Pais $pais, Estado $estado, Cidade $cidade)
    {
        $this->pais = $pais;
        $this->estado = $estado;
        $this->cidade = $cidade;
    }

    public function index()
    {
      $estado = $this->estado
      ->orderBy('est_nome', 'ASC')->get(); 

      $cidade = $this->cidade
      ->Where('cid_cod' , '=', 0)
      ->orderBy('cid_nome', 'ASC')->get();  


    $url = "https://www.worldometers.info/coronavirus/country/brazil/";  

    $dadosSite = file_get_contents($url);

       


    $var1 = explode('<span>',  $dadosSite);
    $novoVar1 = $var1[2];
    $var2 = explode('</span>', $novoVar1);
    $novoVar2 = $var2[0];

    
    
    


      return view('welcome', ['estado' => $estado, 'cidade' => $cidade, 'var2' =>$novoVar2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadCidades(Request $request)
    {
        $dataForm = $request->all();
        $est_cod = $dataForm['estadosPick'];
        $sql= "Select cidade.cid_cod, cidade.cid_nome from cidade where est_cod = '$est_cod' " ;
        $sql = $sql . "order by cidade.cid_nome ASC";
        $cidade = DB::select($sql);
        
        return view('cidades_ajax', ['cidade' => $cidade]);

    }

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
