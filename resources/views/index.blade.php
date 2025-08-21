@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1>Home</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Выйти</button>
    </form>

    <h2>Мои заказы</h2>
    @if($orders->count())
        <ul>
            @foreach($orders as $order)
                <li>
                    <strong>{{ $order->title }}</strong><br>
                    {{ $order->description }}
                </li>
            @endforeach
        </ul>
    @else
        <p>У вас пока нет заказов.</p>
    @endif

@endsection
