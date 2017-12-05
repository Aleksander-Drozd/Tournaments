<div>
    @auth()
        @include('singleTournament.partials.nextMatchFillable', ['nextMatch' => $tournament -> matches[0]])
        @if(count($matches) > 0)
            <h3 style="margin-top: 60px">Upcoming matches</h3>
            @foreach($matches as $match)
                <div class="row">
                    <div class="col-md-6">
                        <h4>Match against: {{ $match -> opponent(Auth::user()) -> name}}</h4>
                    </div>
                    <div class="col-md-3">
                        <h5>{{ $match -> datetime}}</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>{{$match -> location}}</h5>
                    </div>
                </div>
            @endforeach
        @endif
    @endauth
</div>
