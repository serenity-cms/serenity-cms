<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntityTypeVariables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('entity_type_variables', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('entity_type_id')->unsigned();
             $table->string('variable_name');
             $table->string('field');
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
         Schema::dropIfExists('entity_type_variables');
     }
}
