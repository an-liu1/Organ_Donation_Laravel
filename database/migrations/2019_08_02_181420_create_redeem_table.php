<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedeemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redeem', function(Blueprint $table){

            $table -> increments('id');
            $table -> string('name',50) -> notNull();
            $table -> integer('points') -> notNull();
            $table -> string('products',50) -> notNull();
            $table -> dateTime('redeem_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('redeem');
    }
}
