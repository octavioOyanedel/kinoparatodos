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
    	$sorteo = new Sorteo;
    	$ultimo = $sorteo->obtenerSorteoMasReciente();
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
