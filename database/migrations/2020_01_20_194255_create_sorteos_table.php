<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('numero');
            $table->date('fecha');
            $table->unsignedInteger('n1');
            $table->unsignedInteger('n2');
            $table->unsignedInteger('n3');
            $table->unsignedInteger('n4');
            $table->unsignedInteger('n5');
            $table->unsignedInteger('n6');
            $table->unsignedInteger('n7');
            $table->unsignedInteger('n8');
            $table->unsignedInteger('n9');
            $table->unsignedInteger('n10');
            $table->unsignedInteger('n11');
            $table->unsignedInteger('n12');
            $table->unsignedInteger('n13');
            $table->unsignedInteger('n14');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorteos');
    }
}
