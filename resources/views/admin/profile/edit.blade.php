@extends('layouts.admin_create')

@section('title', 'プロフィール変更・削除')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール変更</h2>
                    <form action="{{ action('Admin\ProfileController@create' }}" method="post" enctype="multipart/from-data">
                        @if(count($errors) > 0)
                            <ul>
                                 @foreach(errors->all() as $e)
                                     <li>{{ $e }}</li>
                                 @endforeach
                            </ul>    
                        @endif
                        <label for ="name">名前</label>
                        <input type="text" id="name" value="{{ $profile->name }}">
                        <br>
                        <label for ="email">メールアドレス</label>
                        <input type="email" id="email" value="{{ $profile->email }}">
                        <br>
                        <label for ="password">パスワード</label>
                        <input type="password" id="password" value="{{ $profile->password }}">
                        <br>
                        <label for="passwordConfirm">パスワード確認</label>
                        <input type="password" name="passwordConfirm" id="passwordConfirm"value="{{ $profile->password }}" required>
                        <br>
                        <input type="submit" class="btn btn-primary" value="変更登録">
                    </form>
                    <form action="{{ action('Admin\ProfileController@delete') }}" method="post">
                        <label for="delete">プロフィール削除</label>
                        <input type="submit" class="btn btn-primary" value=プロフィール"削除">
                    </form>
            </div>
        </div>
    </div>
@endsection
