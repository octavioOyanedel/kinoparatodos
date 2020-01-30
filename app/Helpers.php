<?php

	/*
		Crea colección base con 14 arreglos uno para cada fila
	*/
	function crearColeccionProyeccion($coleccionBase){
		$coleccion = array();

	}

	/*
		Crea colección base con 14 arreglos uno para cada fila
	*/
	function crearColeccionBase($sorteos){
		$coleccion = array();
		for ($i = 1; $i <= 14; $i++) { 
			array_push($coleccion, poblarArreglosBase($sorteos, $i));
		}
		return $coleccion;
	}

	/*
		Poblar arreglos base
	*/
	function poblarArreglosBase($sorteos, $i){
		$arreglo = array();
		foreach ($sorteos as $sorteo) {
			switch ($i) {
				case 1: array_push($arreglo,$sorteo->n1); break;
				case 2: array_push($arreglo,$sorteo->n2); break;
				case 3: array_push($arreglo,$sorteo->n3); break;
				case 4: array_push($arreglo,$sorteo->n4); break;
				case 5: array_push($arreglo,$sorteo->n5); break;
				case 6: array_push($arreglo,$sorteo->n6); break;
				case 7: array_push($arreglo,$sorteo->n7); break;
				case 8: array_push($arreglo,$sorteo->n8); break;
				case 9: array_push($arreglo,$sorteo->n9); break;
				case 10: array_push($arreglo,$sorteo->n10); break;
				case 11: array_push($arreglo,$sorteo->n11); break;
				case 12: array_push($arreglo,$sorteo->n12); break;
				case 13: array_push($arreglo,$sorteo->n13); break;
				case 14: array_push($arreglo,$sorteo->n14); break;				
			}
		}
		return $arreglo;
	}

?>