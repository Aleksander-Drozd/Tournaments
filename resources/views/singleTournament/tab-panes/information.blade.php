<div class="row indented info-section">
    <div class="col-md-9 indented">
        <div>
            <h2>Details</h2>
            <div class="row indented">
                <div class="col-md-6">
                    <div class="info-subsection">
                        <h4>Game</h4>
                        {{--<p>{{$tournament -> game -> name}}</p>--}}
                        <p>Game placeholder</p>
                    </div>
                    <div  class="info-subsection">
                        <h4>Elimination type</h4>
                        <p>{{$tournament -> elimination_type}}</p>
                    </div>
                    <div class="info-subsection">
                        <h4>Conditions</h4>
                        <p>Min: {{$tournament -> min_participants}}; Max {{$tournament -> capacity}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-subsection">
                        <h4>Where</h4>
                        <p>{{$tournament -> location}}</p>
                    </div>
                    <div class="info-subsection">
                        <h4>When</h4>
                        <p>Begins @ {{$tournament -> start_date}}</p>
                        <p>Ends @ {{$tournament -> end_date}}</p>
                    </div>
                </div>
            </div>
            <div class="info-section">
                <h2>Description</h2>
                <div class="indented">
                    <p class="preserve-whitespace text-justify">{{$tournament -> description}}</p>
                </div>
            </div>
            <div class="info-section">
                <h2>Rules</h2>
                <div class="indented">
                    <p class="preserve-whitespace text-justify">{{$tournament -> statute}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 indented">
        <div class="info-section">
            <h2>Rewards</h2>
            <div>
                <ul>
                    <li>1st Noga</li>
                    <li>2nd Kapelusz</li>
                    <li>3rd Hulajręka</li>
                </ul>
            </div>
        </div>
        <div class="info-section">
            <h2>Scoring system</h2>
            <ul>
                <li>Won: 3 points</li>
                <li>Draw: 1 point</li>
                <li>Loose: 0 points</li>
            </ul>
        </div>
    </div>
</div>
