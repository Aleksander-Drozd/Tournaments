<div class="container">
    <h1>Active tournaments organized by you</h1>
    @foreach($active as $tournament)
        @include('layouts.partials.tournamentWithMatch', ['tournament' => $tournament])
    @endforeach
    <h1>Past tournaments organized by you</h1>
    @foreach($past as $tournament)
        @include('layouts.partials.tournamentWithMatch', ['$tournament' => tournament])
    @endforeach
</div>