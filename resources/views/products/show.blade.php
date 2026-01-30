@extends('layouts.app')

@section('content')
<div class="Tovar_info">
    <div class="tovar_prezent">
        <div class="tovar_foto"><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"></div>
        <div class="tovar_foto1"><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"></div>
        <!-- Остальные фото -->
        <div class="name_tovar">{{ $product->name }}</div>
        <div class="prise_tovar">{{ number_format($product->price,0,'.',' ') }} ₽</div>
        <text_0>о товаре:</text_0>
        <div class="text_1">{{ $product->description }}</div>
        
        <form method="POST" action="{{ route('basket.add') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button  class="selle" type="submit"><text_button>Купить</text_button></button>
        </form>
    </div>
</div>
@endsection
