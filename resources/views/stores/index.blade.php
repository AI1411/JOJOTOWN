@extends('layouts.app')

@section('content')
    <section class="new-product t100 home">
        <div class="container">
            <ul class="row text-center list-unstyled">
                @foreach($stores as $store)
                    <li class="col-md-3 col-sm-6 col-xs-12">
                        {{ $store->name }}
                        <div class="product">
                            <img src="{{ asset("storage/store_logo/$store->logo") }}"
                                 width="200px" height="200px">
                            <a href="{{ route('store.show', $store->slug) }}">
                                <button class="btn btn-block">店舗ページへ</button>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
