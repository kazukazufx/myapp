<?php

namespace App\Http\Controllers\Admin;

use App\Member;
use Carbon\Carbon;
use App\MemberDuty;
use App\ShiftRules;
use App\CompleteShift;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        //多次元配列でviewからcontrollerにデータを送る
        //受け取ったデータを保存したい順番に整理する
        //データベースに保存する
        // foreach($request->duty as $member_id => $duty)
        // {
        //     var_dump($member_id);
        //     var_dump($duty);
        // }
        
        // var_dump($request->duty);
        // return;
        $admin_id = Auth::user()->id;
        $admin_name = Auth::user()->name;
        
        // $this->validate($request, CompleteShift::$rules);
       
        foreach($request->duty as $day => $members){
        $shift = new CompleteShift;
        $shift->admin_id = $admin_id;
        $shift->admin_name = $admin_name;
        $shift->day = $day;
        $shift->month = $request->month;
        $shift->year = $request->year;
        $shift->save();
        
        foreach($members as $memberId => $duty){
            $shift->memberDuties()->updateOrCreate(
                ['member_id' => $memberId],
                ['admin_id' => $admin_id, 'duty' => $duty]);
        }
        }
        // return redirect('admin/shift/create');
        return view('admin/shift/complete');
    }
    
    public function edit(Request $request)
    {
        $year = $request->year ?? Carbon::now()->year;
        $month = $request->month ?? Carbon::now()->month;
        $date = Carbon::create($year, $month, 1, 0, 0, 0);
        
        $shifts = CompleteShift::where('year', $year)->where('month', $month)->get();
        $members = Member::all();
        $duty = ShiftRules::all();
        return view('admin.shift.edit', [
            'members' => $members,
            'duty' => $duty,
            'year' => $year,
            'month' => $month,
            'date' => $date,
            'shifts' => $shifts,
        ]);
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
