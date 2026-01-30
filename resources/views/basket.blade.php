@extends('layouts.app')

@section('content')
<div class="name_d">Ваши заказы:</div>
<div class="tovar_basket">
    @php
        $basket = session('basket', []);
        $total = 0; // Для подсчета суммы
    @endphp

    @if(empty($basket))
        <p>Ваша корзина пуста.</p>
    @else
        @foreach($basket as $item)
            @php
                $itemTotal = $item['price'] * $item['quantity'];
                $total += $itemTotal;
            @endphp
            <div class="tovar_fot">
            <img class="small-img" src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
            <div class="item-details">
                <div class="name_tovar">{{ $item['name'] }}</div>
                <div class="price">{{ number_format($itemTotal, 0, '.', ' ') }} ₽</div>
                <div class="quantity">{{ $item['quantity'] }} шт.</div>
            </div>

            
</div>
        @endforeach
    @endif
</div>
@if(!empty($basket))
    <form method="POST" action="{{ route('basket.clear') }}" style="margin-top:20px;">
        @csrf
        <button type="submit" class="btn btn-danger">Очистить корзину</button>
    </form>
@endif

<div class="sum_towar">К оплате: {{ number_format($total, 0, '.', ' ') }} ₽</div>

<form action="{{ route('order.store') }}" method="POST" class="form" id="add-form">
    @csrf
    <div class="adres"><p>Введите адрес доставки:</p>
        <input type="text" name="address" id="nom_adres" class="js-inpyt" />
    </div>
    <div class="nomber_tele"><p>Введите номер телефона:</p>
        <input type="text" name="phone" id="nom_tel" class="js-inpyt" />
    </div>
    <button type="submit" id="send" class="oplata"><text_button>Оплатить</text_button></button>
</form>
@endsection
