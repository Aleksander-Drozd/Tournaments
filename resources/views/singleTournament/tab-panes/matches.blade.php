<div>
    <ul>
        @foreach($tournament -> matches as $match)
            @include('layouts.partials.match', ['matches' => $match])
        @endforeach
    </ul>
</div>
