<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompleteShift extends Model
{
    //
    protected $guarded = array('complete_shift_id');
    
    public static $rules = array(
        'admin_id' => 'required',
        // 'member_id' => 'required',
        'admin_name' => 'required',
        // 'member_name' => 'required',
        'day' =>'required',
        'month' =>'required',
        'year' => 'required',
        );
        
    protected $table = 'complete_shift';
}
