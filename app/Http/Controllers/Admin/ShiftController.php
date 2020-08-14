<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\CompleteShift;
use App\ShiftRules;

class ShiftController extends Controller
{
    //
    public function add()
    {
        $duty = ShiftRules::all();
        $members = Member::all();
        return view('admin.shift.create', ['duty' =>$duty], ['members' => $members]);
    }
    
    public function create(Request $request)
    {
        //コントローラーに情報を送る
        //誰のシフト情報か判別できるようにviewからcontrollerに送る
        var_dump($request->duty);
        return;
        
        $this->validate($request, CompleteShift::$rules);
        $shift = new CompleteShift;
        $form = $request->all();
        unset($form['_token']);
        $shift->fill($form);
        $shift->save();
        
        return redirect('admin/shift/create');
    }
    
    public function edit(Request $request)
    {
        $shift = CompleteShift::find($shift->id);
        if(empty($shift)) {
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
