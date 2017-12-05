<div class="container">

    @if(count($active) > 0)
        <h1>Active tournaments you are participating in</h1>
        @foreach($active as $tournament)
            @include('layouts.partials.tournamentWithMatch', ['tournament' => $tournament])
        @endforeach
    @else
        <h2>There are no active tournaments you are participating in</h2>
    @endif

    @if(count($past) > 0)
        <h1>Tournaments you have participated</h1>
        @foreach($past as $tournament)
            @include('layouts.partials.tournament', ['$tournament' => $tournament])
        @endforeach
    @else
        <h2>There are no past tournaments you have participated in</h2>
    @endif
</div>