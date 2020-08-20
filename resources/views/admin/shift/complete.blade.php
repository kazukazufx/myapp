@extends('layouts.home')

@section('title','ホーム画面')

@section('content')
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="jumbotron">
                <h2 class="display-4">シフト作成が完了しました！</h2>
                <p class="lead"></p>
                </div>
                <a class="btn btn-primary" href="/home">マイページに移動</a>
            </div>
        </div>
    </div>
@endsection
