@extends('layouts.app')

@section('content')
    <section class="container content">
        <div class="col-md-12">@include('layouts.messages')</div>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center">店舗を作成</h2>
            <form action="{{ route('store.store') }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="name">店舗名</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control"
                           placeholder="店舗名" autofocus>
                </div>
                <div class="row">
                    <button class="btn btn-default btn-block" type="submit">作成</button>
                </div>
            </form>
        </div>
    </section>
@endsection
