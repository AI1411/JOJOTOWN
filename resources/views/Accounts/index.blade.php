@extends('layouts.app')

@section('content')
    <div class="col-md-12">@include('layouts.messages')</div>
    <section class="container content">
        <div class="col-md-12">
            <h2><i class="fa fa-home"></i> マイページ</h2>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-8">
                <label for="">名前： </label>
                <h3>{{ $user->name }}</h3>
                <label for="">登録アドレス: </label>
                <h3>{{ $user->email }}</h3>
                <label for="">残りポイント</label>
                <h3>{{ $user->money }}</h3>
                <label for="">会員ステータス</label>
                <h3>
                    {{ $user->status->name }}
                </h3>
                <a href="{{ route('home') }}" class="text-center">
                    <button class="btn btn-block btn-primary">戻る</button>
                </a>
                <hr>
                <a href="{{ route('home') }}" class="text-center">
                    <button class="btn btn-block btn-info">会員ステータスを変更する</button>
                </a>
                <hr>
                <a href="{{ route('store.create') }}" class="text-center">
                    <button class="btn btn-block btn-success">店舗作成登録をする</button>
                </a>

            </div>
            @if($user->status->name != '店舗管理者')
                <div class="col-md-4">
                    <label for="">注文履歴</label>
                </div>
            @else
                <div class="col-md-4">
                    <a href="{{ route('store.create') }}" class="text-center">
                        <button class="btn btn-block">店舗作成ページへ</button>
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection
