@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
@endsection