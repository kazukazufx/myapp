@extends('layouts.admin_member')

@section('title', 'メンバー編集画面')

@section('content')
　　<div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>メンバー変更・削除画面</h2>
                    <form action="{{ action('Admin\MemberController@create') }}" method="post">
                        <label for="name1">名前</label>
                        <input type="text" id="name1" value="{{ $member->name }}">
                        <br>
                        <label for="name2">名前</label>
                        <input type="text" id="name2" value="{{ $member->name }}">
                        <br>
                        <label for="name3">名前</label>
                        <input type="text" id="name3" value="{{ $member->name }}">
                        <br>
                        <label for="name4">名前</label>
                        <input type="text" id="name4" value="{{ $member->name }}">
                        <br>
                        <label for="name5">名前</label>
                        <input type="text" id="name5" value="{{ $member->name }}">
                        <br>
                        <label for="name6">名前</label>
                        <input type="text" id="name6" value="{{ $member->name }}">
                        <br>
                        <label for="name7">名前</label>
                        <input type="text" id="name7" value="{{ $member->name }}">
                        <br>
                        <label for="name8">名前</label>
                        <input type="text" id="name8" value="{{ $member->name }}">
                        <br>
                        <label for="name9">名前</label>
                        <input type="text" id="name9" value="{{ $member->name }}">
                        <br>
                        <label for="name10">名前</label>
                        <input type="text" id="name10" value="{{ $member->name }}">
                        <br>
                        <input type="submit" class="btn btn-primary" value="変更">
                    </form>
            </div>
        </div>
    </div>
@endsection