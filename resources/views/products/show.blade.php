@extends('layouts.app')

@section('content')
    <div class="container product">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Home</a></li>
                    <li><a href="{{ route('store.show', $product->store->slug) }}">{{ $product->store->name }}</a></li>
                    <li class="active">{{ $product->name }}</li>
                </ol>
            </div>
            <figure class="text-center product-cover-wrap col-md-6">
                @if(isset($product->cover_image))
                    <img id="main-image" class="product-cover img-responsive"
                         src="{{ asset("storage/product_image/$product->cover_image") }}?w=400"
                         data-zoom="{{ asset("storage/product_image/$product->cover_image") }}?w=1200">
                @else
                    <img id="main-image" class="product-cover" src="https://placehold.it/300x300"
                         data-zoom="{{ asset("/storage/product_image/$product->cover_image") }}?w=1200"
                         alt="{{ $product->name }}">
                @endif
            </figure>
            <div class="col-md-6">
                <div class="product-description">
                    <h1>{{ $product->name }}
                        <small><i class="fas fa-yen-sign"></i>: {{ $product->price }}</small>
                    </h1>
                    <div class="description">{!! $product->description !!}</div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @include('layouts.messages')
                            <form action="{{ route('cart.store') }}" method="post">
                                @csrf
{{--                                <input type="hidden" name="product_id" value="{{ $product->id }}">--}}
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="cover_image" value="{{ $product->cover_image }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <button type="submit" class="btn btn-block btn-primary">カートに追加する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
