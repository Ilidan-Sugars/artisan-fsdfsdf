@extends('layouts.app')

@section('title', 'Создать заказ')

@section('content')
    <h1>Создать заказ</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <input name="title" type="text" placeholder="Название заказа" required>
        <br>
        <textarea name="description" placeholder="Описание заказа"></textarea>
        <br>
        <button type="submit">Создать</button>
    </form>
@endsection
