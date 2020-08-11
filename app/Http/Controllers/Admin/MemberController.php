<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; //admin_idを得るために必要だと思い加えた
use Carbon\Carbon; //insertではcreated_at,update_atが自動挿入されないので、日付関連操作に

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
       
        // $this->validate($request, Member::$rules);
        // $member = new Member;
        // $form = $request->all();
        // unset($form['_token']);
        // $member->fill($form);
        // $member->admin_id = Auth::user()->id; //admin_idを得る
        // $member->save(); //saveには()が必要
        
        // return redirect('admin/member/create');
    
    // 複数登録
        foreach($request->member_name as $member_name){
            if($member_name !=''){
            $this->validate($request, Member::$rules); //これであっているか自信がない
            $member = new Member;
            $member->admin_id = Auth::user()->id;
            $member->member_name = $member_name;
            $member->save();}
        }
        return;
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
