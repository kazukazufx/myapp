<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'user_id' => 'required',
        'name' => 'required',
        'request_day_off' => 'required',
        'part_or_whole' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        );
}
