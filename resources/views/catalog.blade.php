@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
<div class="katalog_tovar" id="relod_katalog">
    @foreach($products as $product)
    <a href="{{ route('product.show', ['id' => $product->id]) }}">
        <div class="tovar_1">
            <div class="image">
                <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
            </div>
            <div class="info">
                <h3>{{ $product->name }}</h3>
                <span class="prise">{{ $product->price }} ₽</span>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection