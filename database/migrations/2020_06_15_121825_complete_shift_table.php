<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompleteShiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('complete_shift', function(Blueprint $table) {
           $table->increments('id');
           $table->integer('admin_id');
           $table->integer('member_id');
           $table->string('admin_name');
           $table->string('member_name');
           $table->string('day');
           $table->string('month');
           $table->string('year');
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
        //
        Schema::dropIfExists('complete_shift');
    }
}
