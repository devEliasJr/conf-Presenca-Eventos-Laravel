@extends('layouts.main')

@section('title', 'produto')

@section('content')
    @if($id !== null )
    <h1>Exibindo Produto com Id: {{ $id }}</h1>
    @endif

@endsection
