<?php

namespace App\Http\Controllers;

use App\Sorteo;
use Illuminate\Http\Request;
ini_set('memory_limit', '3000M');
ini_set('max_execution_time', '0');

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
		$coleccionBase = crearColeccionBase($sorteos);
		$coleccionProyeccion = crearColeccionProyeccion($coleccionBase);
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
