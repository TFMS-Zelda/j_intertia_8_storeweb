<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';

            $table->id();
            $table->string('name', 128 )->unique();
            $table->date('release_date');
            $table->string('producer', 128 );

            // Constrains and Relations

            //  Relation  a 1:M , Table Autors
            $table->bigInteger('autor_id')->unsigned()->nullable();
            //Llave Foreign  Tabla Autors
            $table->foreign('autor_id')->references('id')->on('autors')
            ->onUpdate('cascade')
            ->onDelete('set null');

              //  Relation  a 1:M  , Table Categories
              $table->bigInteger('category_id')->unsigned()->nullable();
              //Llave Foreign  Table Categories
              $table->foreign('category_id')->references('id')->on('categories')
              ->onUpdate('cascade')
              ->onDelete('set null');

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
        Schema::dropIfExists('movies');
    }
}
