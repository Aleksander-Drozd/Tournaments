<div class="container">
    <h1>Active tournaments you are participating in</h1>
    @foreach($active as $tournament)
        @include('layouts.partials.tournamentWithMatch', ['tournament' => $tournament])
    @endforeach
    <h1>Tournaments you have participated</h1>
    @foreach($past as $tournament)
        @include('layouts.partials.tournament', ['$tournament' => $tournament])
    @endforeach
</div>