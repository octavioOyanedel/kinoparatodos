<?php

namespace App\Http\Controllers;

use App\Sorteo;
use Illuminate\Http\Request;

class KptController extends Controller
{

	/*
		Método welcome	
	*/

    public function welcome()
    {
		return view('welcome');
    }

	/*
		Métodos criterios	
	*/

    public function criterios()
    {
    	//	obtener ultimo sorteo
    	$sorteo = new Sorteo;
    	$ultimo = $sorteo->obtenerSorteoMasReciente();

    	// obtener estructura para criterios
    	$sorteos = Sorteo::all();	
    	obtenerProyeccion(poblarArrayPorColumna($sorteos), poblarArrayPorColumna($sorteos)[0]);
		return view('criterios', compact('ultimo'));
    }


	/*
		Métodos criterios	
	*/

    public function sorteo()
    {
		return view('sorteo');
    }
}
