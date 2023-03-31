<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('name');
            $table->integer('local_number')->nullable();
            $table->integer('central_number')->nullable();
            $table->integer('isbn')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('auther_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('publisher_id')->nullable()->constrained()->onDelete('cascade');
            $table->integer('number_of_pages')->nullable();
=======
            $table->integer('Numero_local');
            $table->integer('Numero_central');
            $table->integer('ISBN');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('auther_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('publisher_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('Titre');
            $table->string('Classement');
            $table->integer('Nombre_de_page');
            $table->string('Image_de_livre');  
>>>>>>> 86e18f07b3e1b8450c426ba8b3999c4221b53dda
            $table->string('status')->default('Y');
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
        Schema::dropIfExists('books');
    }
}
