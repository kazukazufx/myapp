<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShiftController extends Controller
{
    //
    public function add()
    {
        return view('admin.shift.create');
    }
    
    public function create()
    {
        $this->validate($request, CompleteShift::$rules);
        $shift = new ShiftRules;
        $form = $request->all();
        
        unset($form['_token']);
        unset($form['image']);
        
        $shift->fill($form);
        $shift->save();
        
        return redirect('admin/shift/create');
    }
    
    public function edit(Request $request)
    {
        $shift = CompleteShift::find($request->id);
        if(empty($profile)) {
            abort(404);
        }
        return view('admin.shift.edit');
    }
    
    public function update(Request $request)
    {
        $this->validate($request, ShiftRules::$rules);
        $shift = ShiftRules::find($request->id);
        $shift_form = $request->all();
        
        unset($profile_form['_token']);
        
        $shift->fill($shift_form)->save();
        
        return redirect('admin/shiftedit?id=' . $request->id);
    }
    
    public function delete(Request $request)
    {
        $shift = ShiftRules::find($request->id);
        $shift->delete();
        
        return redirect('admin/shift/create');
    }
}
