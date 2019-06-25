<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('adresse')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mdp');
            $table->string('image')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('pseudo')->nullable()->unique();
            $table->integer('score')->nullable();
            $table->string('sexe');
            $table->string('tel');
            $table->integer('type')->nullable();
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
