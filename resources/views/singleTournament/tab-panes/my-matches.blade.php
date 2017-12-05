<div>
    @auth()
        @include('singleTournament.partials.nextMatchFillable', ['nextMatch' => $matches[0]])
        @if(count($matches) > 0)
            <h4>Upcoming matches</h4>
            @foreach($matches as $match)
                @include('layouts.partials.matchAgainst', ['match' => $match])
            @endforeach
        @endif
    @endauth
</div>
