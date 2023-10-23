@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h2 >Buscando por eventos: {{ $search }}</h2>
    <p class="subtitle">Resultados da busca:</p>
    @else
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif

    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body d-flex flex-column">
                <p class="card-date">{{date("d/m/Y", strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary mt-auto">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if($events->count() < 1 && $search)
            <p>Não há eventos cadastrados no momento com o nome de {{ $search }}.
                <a class="pe-auto link-primary link-offset-2 link-underline-opacity-0" href="/">Visualizar todos os eventos</a>
            </p>
        @elseif($events->count() < 1)
            <p>Não há eventos disponíveis, no momento!</p>
            <a class="pe-auto link-primary link-offset-2 link-underline-opacity-0" href="/events/create">Crie o primeiro agora</a>
        @endif
    </div>
</div>

@endsection
