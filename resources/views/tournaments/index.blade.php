@extends('layouts.app')

@section('content')
    {{--<link rel="stylesheet" href="/css/tournament.css">--}}

    <div class="container">
        <h1>Active tournaments</h1>
        @if(count($activeTournaments) > 0)
            @include('tournaments.tournamentsTable', ['tournaments' => $activeTournaments])
        @else
            <h2>There are no active tournaments being played in the moment</h2>
        @endif

        <h1>Upcoming tournaments</h1>
        @if(count($activeTournaments) > 0)
            @include('tournaments.tournamentsTable', ['tournaments' => $futureTournaments])
        @else
            <h2>There are no upcoming tournaments</h2>
        @endif
    </div>
@endsection
