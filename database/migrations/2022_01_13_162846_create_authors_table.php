<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            //uz lenteles id stulpeli
            $table->id();

            //kuriuosi stulpeli name
            $table->string('name');
            $table->string('surname');
            $table->string('description');
            $table->string('phone');
            //uz lenteles 2 stulpelius created_at ir updated_at
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
        Schema::dropIfExists('authors');
    }
}
