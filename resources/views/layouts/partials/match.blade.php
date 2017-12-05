<div class="row">
    <div class="col-md-6">
        <h5>{{ $match -> playerOne -> name}} {{ $match -> scoreOrNull($match -> player_one_score) }} : {{ $match -> scoreOrNull($match -> player_one_score) }} {{ $match -> playerTwo -> name }}</h5>
    </div>
    <div class="col-md-3">
        @if(is_null($match -> datetime))
            <h5>No date provided</h5>
        @else
            <h5>{{ $match -> datetime }}</h5>
        @endif
    </div>
    <div class="col-md-3">
        @if(is_null($match -> location))
            <h5>No date provided</h5>
        @else
            <h5>{{ $match -> location }}</h5>
        @endif
    </div>
</div>