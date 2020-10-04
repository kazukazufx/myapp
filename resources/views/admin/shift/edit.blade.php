@extends('layouts.admin_shift')

@section('title', 'シフト作成')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>シフト変更画面</h2>
                <form action="{{ action('Admin\ShiftController@update', compact('year', 'month')) }}" method="post" >
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-dark table-striped table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <input type="text" name="year" value="{{ $year }}">
                                        <input type="text" name="month" value="{{ $month }}">
                                        月
                                    </th>
                                    @foreach(range(1, (int) $date->format('t')) as $i)
                                        <th scope="col">{{ $i }}日</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $m)
                                    <tr>
                                        <th scope="row">{{ $m->member_name }}</th>
                                        @foreach(range(1, (int) $date->format('t')) as $i)
                                            @php
                                                $shift = $shifts->first(function($shift) use($i) {
                                                    return (int) $shift->day === (int) $i;
                                                });
                                                $selectedDuty = $shift
                                                    ? optional($shift->memberDuties->first(function($memberDuty) use($m) {
                                                        return $memberDuty->member_id === $m->id;
                                                    }))->duty
                                                    : null
                                                ;
                                            @endphp
                                            <td>
                                                <select name="duty[{{ $i }}][{{ $m->id }}]">
                                                    @foreach($duty as $d)
                                                        <option
                                                            value="{{ $d->id }}"
                                                            @if ((int) $selectedDuty === $d->id) selected @endif
                                                        >{{ $d->duty }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection