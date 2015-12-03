<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EjercicioController extends Controller
{
    /**
     * Display a listing of the resource.asas
     *
     * @return \Illuminate\Http\Response
     */   

    public $id;    
    public $equipo;

    public function ejercicio()
    {
         return view('ejercicio.ejercicio');
    }

    public function getequipo(Request $request)
    {        
        $this->selectequipo($request->input('pais'));
        return view('Ejercicio.equipo')->with('equipos', $this->equipo);
    } 
    public function equipo($select)
    {

      $this->selectequipo($select);
      return Response()->json($this->equipo);
    }

    public function selectequipo($select)
    {
        $this->id = $select;
        //Carga Arreglo de Retorno con los equipos del pais
        switch ($this->id) {
            case '1': //Colombia
                $this->equipo = array('Millonarios','Nacional','Santa Fe','Tolima','Cali','Junior','Once Caldas');
                break;
            case '2': //España
                $this->equipo = array('Barcelona','Real Madrid','Atletico Madrid','Real Sociedad','Sevilla','Atletic Bilbao');
                break;
            case '3': //Inglaterra
                $this->equipo = array('Man United','Man City','Chelsea','Liverpool','Arsenal','Swansea');
                break;
            case '4': //Italia
                $this->equipo = array('Juventus','Internaciona','Ac Milan','Fiorentina','Calcio','Ac Roma');
                break;
            default:
                $this->equipo = array('1 Colombia','2 Espana','3 Inglaterra','4 Italia');
                break;
        }

        return 1;
    }
}