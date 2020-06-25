<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShiftRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
       Schema::create('shift_rules', function(Blueprint $table) {
           $table->increments('shift_rules_id');
           $table->increments('duty');
           $table->increments('required_number');
           $table->increments('alert_1');
           $table->increments('alert_2');
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
        Schema::dropIfExists('shift_rules');
    }
}
