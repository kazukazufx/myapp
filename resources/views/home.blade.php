@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <form action="{{ action('Admin\ProfileController@add') }}" method="get">
                <div class="form-group row">
                    <label class="col-md-2" for="register">登録</label>
                    <div class="col-md-7">
                        <input type="submit" class="btn btn-primary" value="登録">
                    </div>
                </form>
                
                <form action="{{ action('Admin\ProfileController@index') }}" method="post" enctype=multipart/form-data>
                    <div class="form-group row">
                    <label class="col-md-2" for="email">E-MAIL</label>
                        <div class="col-md-7">
                            <input type="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-2" for="email">Password</label>
                        <div class="col-md-7">
                            <input type="password" name="password" value="{{ old('password') }}">
                        </div>
                    </div>
                    <div class="form^group row">
                        <label class="col-md-2" for="login">ログイン</label>
                        <div class="col-md-7">
                            <input type="submit" class="btn btn-primary" value="ログイン">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
