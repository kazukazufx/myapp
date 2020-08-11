@extends('layouts.admin_shift')

@section('title', 'シフト設定変更')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>シフト設定変更</h2>
                    <form action="{{ action('Admin\ShiftController@create') }}" method="post">
                        <table class="table table-dark table-striped table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">9月</th>
                                    <th scope="col">1日</th>
                                    <th scope="col">2日</th>
                                    <th scope="col">3日</th>
                                    <th scope="col">4日</th>
                                    <th scope="col">5日</th>
                                    <th scope="col">6日</th>
                                    <th scope="col">7日</th>
                                    <th scope="col">8日</th>
                                    <th scope="col">9日</th>
                                    <th scope="col">10月</th>
                                    <th scope="col">11日</th>
                                    <th scope="col">12日</th>
                                    <th scope="col">13日</th>
                                    <th scope="col">14日</th>
                                    <th scope="col">15日</th>
                                    <th scope="col">16日</th>
                                    <th scope="col">17日</th>
                                    <th scope="col">18日</th>
                                    <th scope="col">19日</th>
                                    <th scope="col">20日</th>
                                    <th scope="col">21月</th>
                                    <th scope="col">22日</th>
                                    <th scope="col">23日</th>
                                    <th scope="col">24日</th>
                                    <th scope="col">25日</th>
                                    <th scope="col">26日</th>
                                    <th scope="col">27日</th>
                                    <th scope="col">28日</th>
                                    <th scope="col">29日</th>
                                    <th scope="col">30日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Aさん</th>
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                </tr>
                                 <tr>
                                    <th scope="row">Bさん</th>
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                </tr>
                                 <tr>
                                    <th scope="row">Cさん</th>
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                </tr>
                                 <tr>
                                    <th scope="row">Dさん</th>
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" class="btn btn-primary" value="変更登録">
                    </form>
            </div>
        </div>
    </div>
@endsection