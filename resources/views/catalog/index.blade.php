@extends('layouts.app')

@section('content')
<div class="katalog_tovar" id="relod_katalog">
    @foreach($products as $product)
    <div class="product-item">
        <a href="{{ route('product.show', $product->id) }}">
            <div class="tovar_1">
                <div class="image">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
                <div class="info">
                    <h3>{{ $product->name }}</h3>
                    <span class="prise">{{ number_format($product->price, 0, ',', ' ') }} ₽</span>
                </div>
            </div>
        </a>
        <!-- Форма добавления в корзину -->
        <form method="POST" action="{{ route('basket.add') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit">В корзину</button>
        </form>
    </div>
    @endforeach
</div>

<!-- Вывод сообщения о добавлении, если есть -->
@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px;">
        {{ session('success') }}
    </div>
@endif

<!-- Возможно, добавьте сюда ссылку или блок для отображения корзины -->
@endsection
