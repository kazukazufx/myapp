<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberDuty extends Model
{
    //
    protected $guarded = array('member_duty_id');
    
    public static $rules = array(
        'complete_shift_id' => 'required',
        'admin_id' => 'required',
        'member_id' => 'required',
        'duty' => 'required',
        );
}
