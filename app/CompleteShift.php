<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompleteShift extends Model
{
    //
    protected $guarded = array('complete_shift_id');
    
    public static $rules = array(
        'admin_id' => 'required',
        'member_id' => 'required',
        'admin_name' => 'required',
        'member_name' => 'required',
        'calendar_month' =>'required',
        'calendar_year' => 'required',
        'duty' => 'required',
        'created_at' => 'required',
        );
}
