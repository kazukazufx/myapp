@extends('layouts.admin_create')

@section('title', 'プロフィール新規作成')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール作成画面</h2>
                    <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/from-data">
                       @if(count($errors) > 0)
                           <ul>
                               @foreach($errors->all() as $e)
                                   <li>{{ $e }}</li>
                               @endforeach
                           </ul>
                       @endif
                        <label for ="name">名前</label>
                        <input type="text" id="name">
                        <br>
                        <label for ="email">メールアドレス</label>
                        <input type="email" id="email">
                        <br>
                        <label for ="password">パスワード</label>
                        <input type="password" id="password">
                        <br>
                        <label for="passwordConfirm">パスワード確認</label>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" required>
                        <br>
                        <input type="submit" class="btn btn-primary"value="登録">
                    </form>
            </div>
        </div>
    </div>
@endsection
