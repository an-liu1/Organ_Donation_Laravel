<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor', function(Blueprint $table){

            $table -> increments('id');
            $table -> string('last_name',50) -> notNull();
            $table -> string('first_name',50) -> notNull();
            $table -> string('organ',50) -> notNull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donor');
    }
}
