<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Numero_abonné');
            $table->string('Name');
            $table->date('Date_de_naissance');
            $table->string('Gender');
            $table->string('Email');
            $table->integer('Phone');
            $table->string('Address');
            $table->string('Fonction');
            $table->bigInteger('Numero_CIN');
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
        Schema::dropIfExists('students');
    }
}
