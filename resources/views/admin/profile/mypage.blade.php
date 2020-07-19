@extends('layouts.admin_create')

@section('title', 'プロフィール')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マイページ</h2>
                    <label for="id">ID</label>
                    <input type="text" id="id" value="{{ $profile->id }}" readonly>
                    <br>
                    <label for ="name">名前</label>
                    <input type="text" id="name" value="{{ $profile->name }}" readonly>
                    <br>
                    <label for ="email">メールアドレス</label>
                    <input type="email" id="email" value="{{ $profile->email }}" readonly>
                    <br>
                    <label for ="password">パスワード</label>
                    <input type="password" id="password" value="{{ $profile->password }}" readonly>
                    <br>
                    <input type="submit" class="btn btn-primary" value="変更登録">
            </div>
        </div>
    </div>
@endsection
