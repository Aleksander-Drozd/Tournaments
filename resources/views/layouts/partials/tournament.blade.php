<div id="tournament" class="redirect-row" onclick="location.href='/tournaments/{{$tournament -> id}}'">
    <div class="container">
        <div class="row">
                <h3>{{$tournament -> name}}</h3>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h5>Game: {{$tournament -> game -> name}}</h5>
            </div>
            <div class="col-md-3">
                <h5>Type: {{$tournament -> elimination_type}}</h5>
            </div>
            <div class="col-md-4">
                <h5>Time: {{$tournament -> start_date}} – {{$tournament -> end_date}}</h5>
            </div>
            <div class="col-md-2">
                <h5>Contestants: 0 | {{$tournament -> max_participants}}</h5>
            </div>
        </div>
    </div>
</div>