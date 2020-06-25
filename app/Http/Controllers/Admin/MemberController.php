<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    //
    public function add()
    {
        return view('member.profile.create');
    }
    
    public function create(Request $request)
    {
        //
        $this->validate($request, ['name' => 'required',]);
    }
    
    public function edit()
    {
        //
    }
    
    public function update()
    {
        //
    }
    
    public function delete()
    {
        //
    }
}
