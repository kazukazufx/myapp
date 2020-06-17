<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'complete_shift_number_id' => 'required',
        'created_at' => 'required',
        'user_id' => 'required',
        'name' => 'required',
        'duty' => 'required',
        'required_skill' => 'required',
        'calendar' => 'required',
        );
        
    public function shift_rules()
    {
        return $this->hasMany('App\ShiftRules');
        return $this->hasMany('App\Request');
    }
}
