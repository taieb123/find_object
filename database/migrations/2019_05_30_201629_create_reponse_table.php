<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse', function (Blueprint $table) {
            $table->bigIncrements('id_rep');
            $table->text('txt_rep');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_ann');
            $table->unsignedBigInteger('id_que');
            $table->timestamps();
            $table->foreign('id_que')->references('id_quest')->on('question')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('utilisateur')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponse');
    }
}
