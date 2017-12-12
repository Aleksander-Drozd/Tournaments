<div id="tournamentWithMatch" onclick="location.href='/tournaments/{{$tournament -> id}}'">
    @include('layouts.partials.tournament', ['tournament' => $tournament])
    <div id="matchAgainst" class="row col-md-offset-2">
        @if(count($tournament -> matches) > 0)
            @include('layouts.partials.matchAgainst', ['match' => $tournament -> matches['0']])
        @else
            <h4>There are no upcoming matches for you</h4>
        @endif
    </div>
</div>