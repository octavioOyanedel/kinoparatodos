<?php

	/*
		Obtiene columnas de sorteos y las guarda en array.
	*/
	function poblarArrayPorColumna($sorteos){
		$arreglo = array();
		foreach ($sorteos as $sorteo) {
			array_push($arreglo,$sorteo->n1);
		}
		return $arreglo;
	}

	/*
		Obtener patrón de proyección para gráfico.
	*/
	function obtenerProyeccion($arreglo, $numero){
		// obtener arreglo de diferencias comparando último 
		$proyeccionBase = array();
		for ($i=0; $i < count($arreglo); $i++) { 
			array_push($proyeccionBase,($arreglo[$i] - $numero));
		}
		obtenerMejorPatron($proyeccionBase);
	}

	/*
		Buscar patrón mas largo y con mas repeticiones
	*/
	function obtenerMejorPatron($proyeccionBase){

		// fin: largo máximo para recorrer arreglo 
		$fin = (int) round((count($proyeccionBase) / 2), 0, PHP_ROUND_HALF_DOWN);
		$finCrear = 2;

		// loop crear patrones
		for ($i = 0; $i < $fin - 1; $i++) { 
			/*
				fin arreglo par
				fin arreglo impar
			*/
			for ($j = 0; $j < (2 + $i) - 1; $j++) { 
				# code...
			}
			// loop proyecciones
			for ($k = 0; $k < $fin - 1; $k++) { 
				// si existe patron aumentar contador
			}

			// si contador > 0 guardar en colección de patrones

		}
	}

?>