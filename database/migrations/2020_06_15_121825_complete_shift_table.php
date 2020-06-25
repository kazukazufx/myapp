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
           $table->increments('complete_shift_id');
           $table->integer('admin_id');
           $table->integer('member_id');
           $table->integer('admin_name');
           $table->integer('member_name');
           $table->date('calendar_month');
           $table->date('calendar_year');
           $table->integer('duty');
           $table->timestamps('created_at');
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
