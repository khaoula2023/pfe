<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->integer('Numero_matricule');
            $table->string('Nom');
            $table->date('Date_de_naissance');
            $table->integer('Numero');
            $table->string('Address');
            $table->string('Email');
            $table->string('Genre');
            $table->string('Fonction');
            $table->integer('Num_CIN');
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
        Schema::dropIfExists('employee');
    }
}
