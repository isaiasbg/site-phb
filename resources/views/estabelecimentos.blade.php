@extends('layouts.app')

@section('title', 'Estabelecimentos')

@section('content')
    <h2>Melhores Pizzarias</h2>

    @foreach ($estabelecimentos as $categoria => $lista)
        <div class="categoria-box">
            <h3>{{ $categoria }}</h3>
            <div class="cards-container">
                @foreach ($lista as $est)
                    <div class="card">
                        <h4>{{ $est->nome }}</h4>
                        <p><strong>Endereço:</strong> {{ $est->endereco }}</p>
                        
                        
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
