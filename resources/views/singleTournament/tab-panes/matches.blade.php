<div>
    <ul>
        <div class="col-md-6">
            <h5 style="font-weight: bold">Players and score</h5>
        </div>
        <div class="col-md-3">
            <h5 style="font-weight: bold">Date</h5>
        </div>
        <div class="col-md-3">
           <h5 style="font-weight: bold">Location</h5>
        </div>
        @foreach($tournament -> matches as $match)
            @include('layouts.partials.match', ['matches' => $match])
        @endforeach
    </ul>
</div>
