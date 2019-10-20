@extends('layouts.app')

@section('content')
    <hr>
    <!-- Main content -->
{{--    <div class="col-md-12">@include('layouts.messages')</div>--}}
    <section class="container content">
        <div class="col-md-4 col-md-offset-4">
            @include('layouts.messages')
            <h2>Login to your account</h2>
            <form action="{{ route('login') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" name="password" id="password" value="" class="form-control" placeholder="xxxxx">
                </div>
                <div class="row">
                    <button class="btn btn-default btn-block" type="submit">ログイン</button>
                </div>
            </form>
            <div class="row">
                <hr>
                <a href="{{route('password.request')}}">パスワードを忘れた方</a><br>
                <a href="{{route('register')}}" class="text-center">新規登録へ</a>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
