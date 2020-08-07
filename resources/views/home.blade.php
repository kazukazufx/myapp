@extends('layouts.home')

@section('title','ホーム画面')

@section('content')
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>ホーム画面</h2>
                <form action="{{ action('HomeController@login') }}" method="post" enctype="multipart/from-data">
                    @csrf
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email">
                    <br>
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password">
                    <br>
                    <label for="submit">ログイン</label>
                    <input type="submit" class="btn btn-primary" name="submit" value="ログイン">
                    <br>
                </form>
                <a class="btn btn-primary" href="/register">登録</a>
            </div>
        </div>
    </div>
@endsection
