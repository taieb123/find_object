<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtiliateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utiliateur', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->text('adresse');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mdp');
            $table->string('image')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('pseudo');
            $table->integer('score');
            $table->string('sexe');
            $table->string('tel');
            $table->integer('type');
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
        Schema::dropIfExists('utiliateur');
    }
}
