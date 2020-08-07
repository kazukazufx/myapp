<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    public function add()
    {
        return view('admin.member.create');
    }
    
    public function create(Request $request)
    {
        //
       
        $this->validate($request, Member::$rules);
        $member = new Member;
        $form = $request->member_name;
        unset($form['_token']);
        
        return redirect('admin/member/create');
        
    }
    
    public function edit(Request $request)
    {
        //
        $member = Member::find($request->id);
        if(empty($profile)) {
            abort(404);
        }
        return view('admin.member.edit');
    }
    
    public function update(Request $request)
    {
        //
        $this->validate($request, Member::$rules);
        $member = Member::find($request->id);
        $member_form = $request->all();
        
        unset($member_form['_token']);
        
        $member->fill($member_form)->save();
        
        return redirect('admin/member/edit?id=' . $request->id);
    }
    
    public function delete(Request $request)
    {
        //
        $member = Member::find($request->id);
        $member->delete();
        
        return redirect('admin/member/create');
    }
}
