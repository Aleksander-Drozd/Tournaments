<div class="container">

    @if(count($active) > 0)
        <h1>Active tournaments organized by you</h1>
        @foreach($active as $tournament)
            @include('layouts.partials.tournament', ['tournament' => $tournament])
        @endforeach
    @else
        <h2>There are no active tournaments organized by you</h2>
    @endif

    @if(count($past) > 0)
        <h1>Past tournaments organized by you</h1>
        @foreach($past as $tournament)
            @include('layouts.partials.tournament', ['$tournament' => $tournament])
        @endforeach
    @else
        <h2>There are no past tournaments organized by you</h2>
    @endif
</div>