<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNegociosTable extends Migration
{

  public function up()
  {
    Schema::create('negocios', function (Blueprint $table) {

      $table->increments('id');
      $table->integer('pais_id')->unsigned();
      $table->integer('user_id')->unsigned();
      $table->string('razonSocial');
      $table->string('rfc');
      $table->string('logo');
      $table->string('email');
      $table->string('calle');
      $table->smallInteger('numeroExterior');
      $table->tinyInteger('numeroInterior');
      $table->string('colonia');
      $table->string('delegacion');
      $table->string('estado');
      $table->mediumInteger('codigoPostal');
      $table->string('status');
      $table->timestamps();

      // references keys
      $table->foreign('pais_id')->references('id')->on('paises');
      $table->foreign('user_id')->references('id')->on('users');

    });
  }

  public function down()
  {
    Schema::drop('negocios');
  }
}