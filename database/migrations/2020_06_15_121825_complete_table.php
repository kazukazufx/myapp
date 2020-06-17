<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('complete', function(Blueprint $table) {
           $table->increments('id');
           $table->increments('complete_shift_number_id');
           $table->timestamps('created_at');
           $table->integer('user_id');
           $table->integer('name');
           $table->integer('duty');
           $table->integer('required_skill');
           $table->date('calendar');
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
        Schema::dropIfExists('complete');
    }
}
