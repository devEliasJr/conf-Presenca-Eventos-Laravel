@extends('layouts.main')

@section('title'. 'produtos')

@section('content')

<h1>Tela de produtos</h1>

    @if($busca !== '')
    <p>O usuario esta buscando por {{ $busca }}</p>
    @endif

@endsection
