<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function(Blueprint $table){

            $table -> increments('id');
            $table -> string('username',20) -> notNull();
            $table -> string('password',255) -> notNull();
            $table -> string('name',30) -> notNull();
            $table -> string('tel',14);
            $table -> string('email',40);
            $table -> integer('points');
            $table -> string('last_login_ip') -> notNull();
            $table -> dateTime('last_login_time');
            $table -> string('donor_form',50) -> nullable();
            $table -> timestamps();
            $table -> rememberToken();
            $table -> enum('status',[1,2]) -> nuoNull() -> default('2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
