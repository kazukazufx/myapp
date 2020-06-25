<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberDutyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('member_duty', function(Blueprint $table) {
            $table->increments('member_duty_id');
            $table->integer('complete_shift_id');
            $table->integer('admin_id');
            $table->integer('member_id');
            $table->string('duty');
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
        Schema::dropIfExists('member_duty');
    }
}
