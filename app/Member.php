<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $guarded = array('member_id');
    
    public static $rules = array(
        'admin_id' => 'required',
        'member_name' => 'required',
        );
}

