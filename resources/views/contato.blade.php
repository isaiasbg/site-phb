@extends('layouts.app')
@section('title', 'Contato')
@section('content')

    <h1>Contato</h1>
    <form method="POST" action="/contato">
        @csrf
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="email" name="email" placeholder="Seu e-mail" required>
        <textarea name="mensagem" placeholder="Mensagem"></textarea>
        <button type="submit">Enviar</button>
    </form>
@endsection