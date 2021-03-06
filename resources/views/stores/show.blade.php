@extends('layouts.app')

@section('content')
    <section class="new-product t100 home">
        <div class="container">
            <a href="{{ route('store.index') }}">
                <p class="btn btn-block">店舗一覧</p>
            </a>
            <hr>
            <h2 class="mb-3 text-center">{{ $store->name }}の商品ページ</h2>

            <ul class="row text-center list-unstyled">
                @foreach($products as $product)
                    <li class="col-md-3 col-sm-6 col-xs-12 product-list">
                        <div class="single-product">
                            <div class="product">
                                <a href="{{ route('product.show', $product->slug) }}">
                                    <img src="{{ asset("storage/product_image/$product->cover_image") }}"
                                    alt="{{ $product->name }}"
                                    width="250px" height="400px">
                                </a>
                                <large>{{ $product->name }}</large><br>
                                <small><i class="fas fa-yen-sign"></i>: {{ $product->price }}</small>
                                <button class="btn btn-block">カートに入れる</button>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
