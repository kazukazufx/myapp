<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShiftRules extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'duty' => 'required',
        'required_number' => 'required',
        'required_skill' => 'required',
        );
    public function request()
    {
        return $this->hasMany('App\Request');
    }
}
