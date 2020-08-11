@extends('layouts.admin_member')

@section('title', 'メンバー作成')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>メンバー作成画面</h2>
                    <form action="{{ action('Admin\MemberController@create') }}" method="post">
                        @csrf
                        <label for="name1">名前</label>
                        <input type="text" id="name1" name="member_name[]">
                        <br>
                        <label for="name2">名前</label>
                        <input type="text" id="name2" name="member_name[]">
                        <br>
                        <label for="name3">名前</label>
                        <input type="text" id="name3" name="member_name[]">
                        <br>
                        <label for="name4">名前</label>
                        <input type="text" id="name4" name="member_name[]">
                        <br>
                        <label for="name5">名前</label>
                        <input type="text" id="name5" name="member_name[]">
                        <br>
                        <input type="submit" class="btn btn-primary" value="登録">
                    </form>
            </div>
        </div>
    </div>
@endsection