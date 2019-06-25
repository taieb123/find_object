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
            $table->integer('etat');
            $table->string('image')->nullable();
            $table->string('nom')->nullable();
            $table->string('lattitude')->nullable();
            $table->string('longitude')->nullable();    
            $table->unsignedBigInteger('id_user_ann');
            $table->unsignedBigInteger('id_region_ann');
            $table->unsignedBigInteger('id_object');
            $table->timestamps();
            $table->foreign('id_user_ann')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_object')->references('id_objet')->on('objet');
            $table->foreign('id_region_ann')->references('id_reg')->on('region')->onDelete('cascade');
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
