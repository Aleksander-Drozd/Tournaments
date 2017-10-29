@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="/css/tournaments.css">

    <div class="container">
        <h1>Aktualnie rozgrywane turnieje</h1>
        @if(count($activeTournaments) > 0)
            @include('tournaments.tournamentsTable', ['tournaments' => $activeTournaments])
        @else
            <h2>Żadne turnieje nie są w tej chwili rozgrywane</h2>
        @endif

        <h1>Nabliższe turnieje</h1>
        @if(count($activeTournaments) > 0)
            @include('tournaments.tournamentsTable', ['tournaments' => $futureTournaments])
        @else
            <h2>Brak zbliżających się turnieji</h2>
        @endif
    </div>
@endsection
