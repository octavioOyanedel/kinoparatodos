<?php

	/*
		Crea colección de patrones con número siguiente y suma
	*/
	function crearColeccionPatronesFinales($coleccionPatronesFinales){
		
	}

	/*
		Crea colección proyección para los 14 números
	*/
	function crearColeccionPatrones($coleccionProyeccion){
		$coleccion = array();
		$numeros = array();
		foreach ($coleccionProyeccion as $proyeccion) {
			array_push($numeros, obtenerNumerosArreglo($proyeccion));
		}

		$indice = 0;
		foreach ($coleccionProyeccion as $proyeccion) {
			// Añadir patron a coleccion
			array_push($coleccion, obtenerPatrones($proyeccion, $numeros[$indice]));
			$indice++;
		}
		return $coleccion;
	}

	/*
		Obtener arreglo patrón para coleccion
	*/
	function obtenerPatrones($proyeccion, $numeros){
		$patrones = array();
		// Recorrido general de 0 a largo $proyeccion / 2 (largo máximo permitido para patrón)
		$fin = (int) round((count($proyeccion) / 2), 0, PHP_ROUND_HALF_DOWN) - 1;
		for ($i = 0; $i < $fin; $i++) { 
			array_push($patrones, crearPatron($proyeccion, $i));
		}
		// 
		return $patrones;
	}

	/*
		Obtener patrón inicial
	*/
	function crearPatron($proyeccion, $indice){
		$arreglo = array();
		for ($i = 0; $i <= $indice + 1; $i++) { 
			array_push($arreglo, $proyeccion[$i]);
		}
		return $arreglo;
	}
	/*
		Obtener números que componen arreglo
	*/
	function obtenerNumerosArreglo($arreglo){
		$numeros = array();
		for ($i = 0; $i < count($arreglo); $i++) { 
			if($i === 0){
				array_push($numeros, $arreglo[$i]);
			}else{
				if(!exiteNumeroEnArreglo($numeros, $arreglo[$i])){
					array_push($numeros, $arreglo[$i]);
				}
			}
		}
		sort($numeros);
		return $numeros;
	}

	/*
		Búscar número en arreglo
	*/
	function exiteNumeroEnArreglo($numeros, $numero){
		$indice = 0;
		while($indice < count($numeros)){
			if($numeros[$indice] === $numero){
				return true;
			}
			$indice++;
		}
		return false;
	}

	/*
		Crea colección proyección para los 14 números
	*/
	function crearColeccionProyeccion($coleccionBase, $ultimo){
		$coleccion = array();
		$indice = 1;
		foreach ($coleccionBase as $arreglo) {
			array_push($coleccion, obtenerDiferencias($arreglo, $ultimo['n'.$indice])); // key dinamica de arreglo asociativo
			$indice++;
		}
		return $coleccion;
	}

	/*
		Obtener diferencias con respecto a último sorteo
	*/
	function obtenerDiferencias($arreglo, $numero){
		$diferencias = array();
		for ($i = 0; $i < count($arreglo); $i++) { 
			array_push($diferencias, ($arreglo[$i] - $numero));
		}
		return $diferencias;
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