<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('admin_member', function(Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->increments('role');
            $table->increments('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('admin_member');
    }
}
