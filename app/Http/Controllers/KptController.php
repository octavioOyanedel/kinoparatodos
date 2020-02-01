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
    	// Obtener ultimo sorteo
    	$sorteo = new Sorteo;
    	$ultimo = $sorteo->obtenerSorteoMasReciente();

    	// Obtener estructura para criterios
    	$sorteos = Sorteo::all();
		$coleccionBase = crearColeccionBase($sorteos);
		$coleccionProyeccion = crearColeccionProyeccion($coleccionBase, $ultimo->toArray());
		$coleccionPatrones = crearColeccionPatrones($coleccionProyeccion);
		$coleccionNumeros = crearColeccionNumeros($coleccionProyeccion);
		$coleccionPatronesNumero = crearColeccionPatronesNumero($coleccionProyeccion, $coleccionPatrones, $coleccionNumeros);
		$coleccionPatronesCantidades = crearColeccionPatronesSuma($coleccionProyeccion, $coleccionPatronesNumero);
dd($coleccionPatronesCantidades);
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
