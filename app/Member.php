<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $guarded = array('member_id');
    
    public static $rules = array(
        'member_name' => 'required',
        );
}

