@extends('layouts.admin_shift')

@section('title', 'シフト作成')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>シフト変更画面</h2>
                <form action="{{ action('Admin\ShiftController@create') }}" method="post" >
                @csrf
                <table class="table table-dark table-striped table-bordered table-hover table-sm">
                    <thead>
                        <tr>
                            <th scope="col">
                            <input type="text" name="year" value="{{ $shift->year }}">
                            <input type="text" name="month" value="{{ $shift->month}}">
                                月</th>
                            @for($i = 1; $i <= 30; $i++)
                            <th scope="col">{{ $i }}日</th>
                            @endfor
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($members as $m)
                                <tr>
                                    <th scope="row">{{ $m->member_name }}</th>
                                @for($i = 1; $i <=7; $i++)
                                    <td>
                                        <select name="duty[{{ $i }}][{{ $m->id }}]">
                                            @foreach($shift->memberDuties as $memberDuty)
                                                <option value="{{ $memberDuty->id }}">{{ $memberDuty->duty }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                @endfor
                                </tr>
                            @endforeach
                        </tbody>
                        <input type="submit" class="btn btn-primary" value="登録">
                    </form>
                </table>
            </div>
        </div>
    </div>
@endsection