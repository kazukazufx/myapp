<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminMember;

class ProfileController extends Controller
{
    //
    
    public function index()
    {
        return view('admin.profile.mypage');
    }
    
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, AdminMember::$rules);
        $profile = new Admin;
        $form = $request->all();
        
        unset($form['_token']);
        unset($form['image']);
        
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        $profile = AdminMember::find($request->id);
        if(empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit');
    }
    
    public function update(Request $request)
    {
        $this->validate($request, AdminMember::$rules);
        $profile = AdminMember::find($request->id);
        $profile_form = $request->all();
        
        unset($profile_form['_token']);
        
        $profile->fill($profile_form)->save();
        
        return redirect('admin/profile/edit?id=' . $request->id);
    }
    
    public function delete(Request $request)
    {
        $profile = AdminMember::find($request->id);
        $profile->delete();
        
        return redirect('admin/profile/create');
    }
}
