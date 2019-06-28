<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce', function (Blueprint $table) {
            $table->bigIncrements('id_annonce');
            $table->date('dateaction');
            $table->text('description');
            $table->string('etat');
            $table->string('image')->nullable();
            $table->string('nom')->nullable();
            $table->string('lattitude')->nullable();
            $table->string('longitude')->nullable();    
            $table->integer('id_reponse');
            $table->integer('id_question');
            $table->unsignedBigInteger('id_user_ann');
            $table->unsignedBigInteger('id_object');
            $table->timestamps();
            $table->foreign('id_user_ann')->references('id')->on('users');
            $table->foreign('id_object')->references('id_objet')->on('objet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce');
    }
}
