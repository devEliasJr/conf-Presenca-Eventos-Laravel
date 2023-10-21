@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Algo...</h1>
    <img src="img/banner.jpg" alt="banner"/>
    @if (10 < 5)
        <p>A CONDIÇÃO É TRUE</p>
    @endif

    @if ($nome === 'Elias')
        <p>Bem vindo {{ $nome }} e tem idade de {{ $idade }} anos</p>
    @else
        <p>Bem vindo</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if ($i == 2)
            <p>O i é 2</p>
        @endif
    @endfor

    @foreach ($arrnames as $nomes)
        <p>{{ $loop->index }}</p>
        <p>{{ $nomes }}</p>
    @endforeach

    @php
        $name = 'Junior';
        print $name;
    @endphp

@endsection
