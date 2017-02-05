<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntityTypeRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('entity_type_relationships', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('left_entity_type_id')->unsigned();
             $table->integer('right_entity_type_id')->unsigned();
             $table->string('left_name');
             $table->string('right_name');
             $table->enum('left_cardinality', ['1', '0..*', '1..*']);
             $table->enum('right_cardinality', ['1', '0..*', '1..*']);
             $table->timestamps();

             $table->unique(['left_entity_type_id', 'left_name']);
             $table->unique(['right_entity_type_id', 'right_name']);
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('entity_type_relationships');
     }
}
