<div class="row col-md-offset-2">
    <div class="col-md-6">
        <h4>Next match against: {{ $match -> opponent -> name}}</h4>
    </div>
    <div class="col-md-3">
        <h5>{{ $match -> datetime}}</h5>
    </div>
    <div class="col-md-3">
        <h5>{{$match -> location}}</h5>
    </div>
</div>