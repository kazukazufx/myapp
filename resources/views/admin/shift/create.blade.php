@extends('layouts.admin_shift')

@section('title', 'シフト作成')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>シフト作成画面</h2>
                <form action="{{ action('Admin\ShiftController@create') }}" method="post" >
                    @csrf
                <table class="table table-dark table-striped table-bordered table-hover table-sm">
                    <thead>
                        <tr>
                            <th scope="col">9月</th><!--Date関数を使う？-->
                            @for($i = 1; $i <= 30; $i++)
                            <th scope="col">{{ $i }}日</th>
                            @endfor
                        </tr>
                    </thead>
                    <!--<form action="{{ action('Admin\ShiftController@create') }}" method="post" >-->
                        <!--@csrf-->
                        <tbody>
                            <tr>
                                @foreach($members as $m)
                                    <th scope="row">{{ $m->member_name }}</th>
                                @for($i = 1; $i <=30; $i++)
                                    <td>
                                        <select name="duty[]">
                                            @foreach($duty as $d)
                                                <option value="{{ $d->id }}">{{ $d->duty }}</option>
                                            @endforeach
                                            <!--<option value="1">A</option>-->
                                            <!--<option value="2">AC</option>-->
                                            <!--<option value="3">AD</option>-->
                                            <!--<option value="4">a</option>-->
                                            <!--<option value="5">0817</option>-->
                                            <!--<option value="6">0917</option>-->
                                            <!--<option value="7">C</option>-->
                                            <!--<option value="8">1120</option>-->
                                            <!--<option value="9">D</option>-->
                                            <!--<option value="10">y</option>-->
                                            <!--<option value="11">y900</option>-->
                                            <!--<option value="12">休</option>-->
                                        </select>
                                    </td>
                                @endfor
                                    <!--<td>-->
                                    <!--     <select name="duty">-->
                                    <!--        @foreach($duty as $d)-->
                                    <!--            <option value="{{ $d->id }}">{{ $d}}</option>-->
                                    <!--        @endforeach-->
                                    <!--    </select>-->
                                    <!--</td>-->
                                    <!--<td>-->
                                    <!--     <select name="duty">-->
                                    <!--        <option value="1">A</option>-->
                                    <!--        <option value="2">AC</option>-->
                                    <!--        <option value="3">AD</option>-->
                                    <!--        <option value="4">a</option>-->
                                    <!--        <option value="5">0817</option>-->
                                    <!--        <option value="6">0917</option>-->
                                    <!--        <option value="7">C</option>-->
                                    <!--        <option value="8">1120</option>-->
                                    <!--        <option value="9">D</option>-->
                                    <!--        <option value="10">y</option>-->
                                    <!--        <option value="11">y900</option>-->
                                    <!--        <option value="12">休</option>-->
                                    <!--    </select>-->
                                    <!--</td>-->
                                    <!--<td>-->
                                    <!--     <select name="duty">-->
                                    <!--        <option value="1">A</option>-->
                                    <!--        <option value="2">AC</option>-->
                                    <!--        <option value="3">AD</option>-->
                                    <!--        <option value="4">a</option>-->
                                    <!--        <option value="5">0817</option>-->
                                    <!--        <option value="6">0917</option>-->
                                    <!--        <option value="7">C</option>-->
                                    <!--        <option value="8">1120</option>-->
                                    <!--        <option value="9">D</option>-->
                                    <!--        <option value="10">y</option>-->
                                    <!--        <option value="11">y900</option>-->
                                    <!--        <option value="12">休</option>-->
                                    <!--    </select>-->
                                    <!--</td>-->
                            </tr>
                            @endforeach
                            <!-- <tr>-->
                            <!--    <th scope="row">Bさん</th>-->
                            <!--    <td>A</td>-->
                            <!--    <td>B</td>-->
                            <!--    <td>C</td>-->
                            <!--    <td>D</td>-->
                            <!--</tr>-->
                            <!-- <tr>-->
                            <!--    <th scope="row">Cさん</th>-->
                            <!--    <td>A</td>-->
                            <!--    <td>B</td>-->
                            <!--    <td>C</td>-->
                            <!--    <td>D</td>-->
                            <!--</tr>-->
                            <!-- <tr>-->
                            <!--    <th scope="row">Dさん</th>-->
                            <!--    <td>A</td>-->
                            <!--    <td>B</td>-->
                            <!--    <td>C</td>-->
                            <!--    <td>D</td>-->
                            <!--</tr>-->
                        </tbody>
                        <input type="submit" class="btn btn-primary" value="登録">
                    </form>
                </table>
            </div>
        </div>
    </div>
@endsection