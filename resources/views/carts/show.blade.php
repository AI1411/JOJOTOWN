@extends('layouts.app')

@section('content')
    <div class="container product-in-cart-list">
        {{--            @if(!$cartItems->isEmpty())--}}
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Cart</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 content">
                <div class="box-body">
                    {{--                    @include('layouts.errors-and-messages')--}}
                </div>
                <h3><i class="fa fa-cart-plus"></i> Shopping Cart</h3>
            </div>
        </div>
        @if(!empty($carts))
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="row header hidden-xs hidden-sm"> -->
                    <div class="row hidden-xs hidden-sm" style="height: 40px;">

                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>カバー</b></div>
                            </div>
                        </div>

                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                            <div class="row">
                                <div class="col-lg-5 col-md-5"><b>商品名</b></div>
                                <div class="col-lg-2 col-md-2"><b>個数</b></div>
                                <div class="col-lg-1 col-md-1"><b>削除</b></div>
                                <div class="col-lg-2 col-md-2"><b>値段</b></div>
                                <div class="col-lg-2 col-md-2"><b>合計</b></div>
                            </div>
                        </div>
                    </div>

                    @foreach($carts as $cartItem)
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        {{--                                <a href="{{ route('front.get.product', [$cartItem->product->slug]) }}"--}}
                                        {{--                                   class="hover-border">--}}
                                        @if(isset($cartItem->cover_image))
                                            <img src="/storage/product_image/{{$cartItem->cover_image}}"
                                                 class="img-responsive img-thumbnail">
                                        @else
                                            <img src="https://placehold.it/120x120" alt=""
                                                 class="img-responsive img-thumbnail">
                                        @endif
                                        {{--                                </a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-8">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        {{ $cartItem->name }}
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        1
                                    </div>
                                    <div class="col-lg-1 col-md-1">
                                        1
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        {{ $cartItem->price }}
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                        1
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <br>
                </div>
            </div>
        @else
            <p>まだ商品がありません</p>
        @endif
    </div>
@endsection
