@extends('layouts.app')

@section('content')
    <section class="container content">
        {{--        <div class="row">--}}
        <div class="col-md-12">
            <h2><i class="fa fa-home"></i> マイページ</h2>
            <hr>
        </div>
        <div class="col-md-12">
            {{--                    <ul class="nav nav-tabs" role="tablist">--}}
            {{--                        <li role="presentation" @if(request()->input('tab') == 'profile') class="active" @endif><a--}}
            {{--                                href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>--}}
            {{--                        <li role="presentation" @if(request()->input('tab') == 'orders') class="active" @endif><a--}}
            {{--                                href="#orders" aria-controls="orders" role="tab" data-toggle="tab">Orders</a></li>--}}
            {{--                        <li role="presentation" @if(request()->input('tab') == 'address') class="active" @endif><a--}}
            {{--                                href="#address" aria-controls="address" role="tab" data-toggle="tab">Addresses</a></li>--}}
            {{--                    </ul>--}}
            <div class="col-md-8">
                <label for="">名前： </label>
                <h3>{{ $user->name }}</h3>
                <label for="">登録アドレス: </label>
                <h3>{{ $user->email }}</h3>
                <label for="">会員ステータス</label>
                <h3>{{ $user->status->name }}</h3>
                <a href="{{ route('home') }}" class="text-center">
                    <button class="btn btn-dark">戻る</button>
                </a>
            </div>
            <div class="col-md-4">
                <label for="">注文履歴</label>
            </div>
        </div>

        {{--        </div>--}}
        {{--        </div>--}}
    </section>
@endsection
