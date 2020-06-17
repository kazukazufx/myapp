<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'user_id' => 'required',
        'skill_name' => 'required',
        );
}

