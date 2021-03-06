<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->string('precio');
            $table->string('destacado');
            $table->string('image');
            $table->timestamps();
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->string('destacado');
            $table->string('image');
            $table->timestamps();
        });
         Schema::create('orden', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('telefono');
            $table->string('cantidad');
            $table->string('producto');
            $table->string('llamame');
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
        Schema::drop('articulos');
        Schema::drop('posts');
        Schema::drop('orden');
    }
}
