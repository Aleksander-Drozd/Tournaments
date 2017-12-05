@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/tournament.css">
    <div class="container">
        @if(count($activeTournaments) > 0)
            <h1>Active tournaments</h1>
            <div>
                @foreach($activeTournaments as $tournament)
                    @include('layouts.partials.tournament', ['tournament' => $tournament])
                @endforeach
            </div>

        @else
            <h2>There are no active tournaments being played at the moment</h2>
        @endif

        @if(count($futureTournaments) > 0)
                <h1>Upcoming tournaments</h1>
                <div>
                    @foreach($futureTournaments as $tournament)
                        @include('layouts.partials.tournament', ['tournament' => $tournament])
                    @endforeach
                </div>
            @else
                <h3>There are no upcoming tournaments</h3>
            @endif
    </div>
@endsection
