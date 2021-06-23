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
            ->Where('cid_cod', '=', 0)
            ->orderBy('cid_nome', 'ASC')->get();


        $urlBrazilData = "https://www.worldometers.info/coronavirus/country/brazil/";

        $brazilData = file_get_contents($urlBrazilData);
        $recoveredData = explode('<span>',  $brazilData);
        $newRecoveredData = $recoveredData[2];
        $endRecoveredData = explode('</span>', $newRecoveredData);
        $endNewRecoveredData = $endRecoveredData[0];


        $casesData =  explode('<span style="color:#aaa">',  $brazilData);
        $newCasesData = $casesData[1];
        $endCasesData = explode('</span>', $newCasesData);
        $endNewCasesData = $endCasesData[0];


        $deathsData = explode('<span>', $brazilData);
        $newDeathsData = $deathsData[1];
        $endDeathsData = explode('</span>', $newDeathsData);
        $endNewDeathsData = $endDeathsData[0];

        return view(
            'home/welcome',
            [
                'estado' => $estado,
                'cidade' => $cidade,
                'recoveredBrazilData' => $endNewRecoveredData,
                'casesBrazilData' => $endNewCasesData,
                'deathsBrazilData' => $endNewDeathsData
            ]
        );
    }

    public function loadCidades(Request $request)
    {
        $dataForm = $request->all();
        $est_cod = $dataForm['estadosPick'];
        $sql = "Select cidade.cid_cod, cidade.cid_nome from cidade where est_cod = '$est_cod' ";
        $sql = $sql . "order by cidade.cid_nome ASC";
        $cidade = DB::select($sql);

        return view('components/cidades_ajax', ['cidade' => $cidade]);
    }

}
