<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShiftRules extends Model
{
    //
    protected $guarded = array('shift_rules_id');
    
    public static $rules = array(
        'duty' => 'required',
        'required_number' => 'required',
        );
        
}
