@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <form action="{{ route('register') }}" method="post">
        <input name="login"  type='text' placeholder='Login'>
        <input name="password" type='password' placeholder='Password'>
        <button type='submit'>Sign up</button>
        @csrf
    </form>
@endsection
