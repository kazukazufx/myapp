@extends('layouts.admin_member')

@section('title', 'メンバー作成')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>メンバー作成画面</h2>
                    <form action="{{ action('Admin\MemberController@create') }}" method="post">
                        <label for="name1[]">名前</label>
                        <input type="text" id="name1">
                        <br>
                        <label for="name2[]">名前</label>
                        <input type="text" id="name2">
                        <br>
                        <label for="name3[]">名前</label>
                        <input type="text" id="name3">
                        <br>
                        <label for="name4[]">名前</label>
                        <input type="text" id="name4">
                        <br>
                        <label for="name5[]">名前</label>
                        <input type="text" id="name5">
                        <br>
                        <label for="name6[]">名前</label>
                        <input type="text" id="name6">
                        <br>
                        <label for="name7[]">名前</label>
                        <input type="text" id="name7">
                        <br>
                        <label for="name8[]">名前</label>
                        <input type="text" id="name8">
                        <br>
                        <label for="name9[]">名前</label>
                        <input type="text" id="name9">
                        <br>
                        <label for="name10[]">名前</label>
                        <input type="text" id="name10">
                        <br>
                        <input type="submit" class="btn btn-primary" value="登録">
                        
                    </form>
            </div>
        </div>
    </div>
@endsection