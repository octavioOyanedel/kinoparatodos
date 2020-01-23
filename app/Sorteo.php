<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'numero', 'fecha', 'n1', 'n2', 'n3', 'n4', 'n5', 'n6', 'n7', 'n8', 'n9', 'n10', 'n11', 'n12', 'n13', 'n14',
    ]; 

    /*
		Obtener último sorteo
    */   
	public function obtenerSorteoMasReciente(){
		return Sorteo::orderBy('fecha','DESC')->first();
	}
}
