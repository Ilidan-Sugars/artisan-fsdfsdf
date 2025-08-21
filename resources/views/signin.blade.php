@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <form action="{{ route('signin') }}" method="post">
        <input name="login"  type='text' placeholder='Login'>
        <input name="password" type='password' placeholder='Password'>
        <button type='submit'>Signin</button>
        @csrf
    </form>
@endsection
