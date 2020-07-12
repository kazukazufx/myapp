@extends('layouts.admin_create')

@section('title', 'プロフィールの新規作成')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィール新規作成</h2>
            <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $a)
                        <li>{{ $a }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="admin_name">氏名</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="admin_name" value="{{ old('name') }}">
                    </div>
                </div>
                </div>
                <div class="form-group-row">
                <label class="col-md-10" for="email">E-mail</label>
                <div class="col-md-10">
                    <input type="email" name="email" rows="1" {{ old('email') }}><br>
                </div>
                <div class="form-group-row">
                    <label class="col-md-10" for="password">Password</label>
                    <div class="col-md-10">
                        <input type="password" name="password" row="1" {{ old('password') }}>
                </div>
                {{ csrf_field() }}
                <div class="m-5"></div>
                <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection
