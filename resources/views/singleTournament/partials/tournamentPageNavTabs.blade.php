<div>
    <div>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="active">
                <a data-toggle="tab" href="#information" role="tab">Information</a>
            </li>
            <li >
                <a data-toggle="tab" href="#scores" role="tab">Scores</a>
            </li>
            <li>
                <a data-toggle="tab" href="#matches" role="tab">Matches</a>
            </li>
            <li>
                <a data-toggle="tab" href="#my-matches" role="tab">My matches</a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane in active" id="information" role="tabpanel">@include('singleTournament.tab-panes.information')</div>
        <div class="tab-pane" id="scores" role="tabpanel">@include('singleTournament.tab-panes.scores')</div>
        <div class="tab-pane" id="matches" role="tabpanel">@include('singleTournament.tab-panes.matches')</div>
        <div class="tab-pane" id="my-matches" role="tabpanel">@include('singleTournament.tab-panes.my-matches', ['matches' => $tournament -> matches])</div>
    </div>
</div>
