<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
//         Schema::create('users', function (Blueprint $table) {
//             $table->increments('id');
//             $table->string('name');
//             $table->string('email')->unique();
//             $table->timestamp('email_verified_at')->nullable();
//             $table->string('password');
//             $table->rememberToken();
//             $table->timestamps();
//         });
       Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NO')->unique();
            $table->string('name');
            $table->string('password');
            $table->string('Smajor');
            $table->string('Sclass');
            $table->string('Sdep');
            $table->string('Smonitor');
            $table->rememberToken();
            $table->timestamps();
            });
       Schema::create('score', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('NO');
            $table->string('ClassName');
            $table->string('ClassScore');
            $table->string('ClassXueFen');
            $table->rememberToken();
            $table->timestamps();
            });
       Schema::create('game_level', function (Blueprint $table) {
               $table->increments('id')->unique();
               $table->string('gamename');
               $table->string('gamelevel');
               $table->string('gamescore');
               $table->string('productionname');
               $table->rememberToken();
               $table->timestamps();
           });
       Schema::create('game_record', function (Blueprint $table) {
               $table->increments('id')->unique();
               $table->string('NO');
               $table->string('gamename');
               $table->string('gamelevel');
               $table->string('gamescore');
               $table->string('productionname')->unique();
               $table->rememberToken();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('score');
        Schema::dropIfExists('game_level');
        Schema::dropIfExists('productionname');
    }
}
