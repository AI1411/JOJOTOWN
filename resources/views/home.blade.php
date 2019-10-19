@extends('layouts.app')

@section('content')
    <section id="hero" class="hero-section top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-content">
                        <h1 class="hero-title" style="color: #227dc7">{{config('app.name')}} Holiday <br> Collection
                        </h1>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    <section class="new-product t100 home">
        <div class="container">

            <ul class="row text-center list-unstyled">
                @for($i = 0;$i < 3;$i++)
                    <div class="section-title b50">
                        <h2>{{ $genres[$i]->name }}</h2>
                    </div>
                    @foreach($genres[$i]->products as $key => $product)
                        @if($key <= 7)
                            <li class="col-md-3 col-sm-6 col-xs-12 product-list">
                                <div class="single-product">
                                    <div class="product">
                                        <img src="{{ asset("storage/product_image/$product->cover_image") }}"
                                             alt="{{ $product->name }}"
                                             width="250px" height="400px">
                                        <small><i class="fas fa-yen-sign"></i>: {{ $product->price }}</small>
                                        <button class="btn btn-block">カートに入れる</button>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @endfor
            </ul>
        </div>
    </section>
@endsection
