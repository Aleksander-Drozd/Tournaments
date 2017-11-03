<div>
    <div>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#information" role="tab">Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#scores" role="tab">Scores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#matches" role="tab">Matches</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#my-matches" role="tab">My matches</a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="information" role="tabpanel">@include('singleTournament.tab-panes.information')</div>
        <div class="tab-pane fade" id="scores" role="tabpanel">@include('singleTournament.tab-panes.scores')</div>
        <div class="tab-pane fade" id="matches" role="tabpanel">@include('singleTournament.tab-panes.matches')</div>
        <div class="tab-pane fade" id="my-matches" role="tabpanel">@include('singleTournament.tab-panes.my-matches')</div>
    </div>
</div>