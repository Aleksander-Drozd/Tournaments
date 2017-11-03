<div class="row indented" style="margin-top: 30px">
    <div class="col-md-9 indented">
        <div>
            <h2>Details</h2>
            <div class="row indented">
                <div class="col-md-6">
                    <div class="information">
                        <h4>Game</h4>
                        <p>{{$tournament -> game}}</p>
                    </div>
                    <div  class="information">
                        <h4>Elimination type</h4>
                        <p>{{$tournament -> eliminationType}}</p>
                    </div>
                    <div class="information">
                        <h4>Conditions</h4>
                        <p>Min: {{$tournament -> min_participants}}; Max {{$tournament -> capacity}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="information">
                        <h4>Where</h4>
                        <p>{{$tournament -> location}}</p>
                    </div>
                    <div class="information">
                        <h4>When</h4>
                        <p>Begins @ {{$tournament -> start_date}}</p>
                        <p>Ends @ {{$tournament -> end_date}}</p>
                    </div>
                </div>
            </div>
            <h2 style="margin-top: 20px;">Description</h2>
            <div class="indented" style="text-align: justify; text-justify: inter-word">
                <p class="preserve-whitespace">{{$tournament -> description}}</p>
            </div>

            <h2 style="margin-top: 20px;">Rules</h2>
            <div class="indented" style="text-align: justify; text-justify: inter-word">
                <p class="preserve-whitespace">{{$tournament -> statute}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 indented">
        <div>
            <h2>Rewards</h2>
            <div>
                <ul>
                    <li>1st Noga</li>
                    <li>2nd Kapelusz</li>
                    <li>3rd Hulajręka</li>
                </ul>
            </div>
        </div>
        <div style="margin-top: 30px;">
            <h2>Scoring system</h2>
            <ul>
                <li>Won: 3 points</li>
                <li>Draw: 1 point</li>
                <li>Loose: 0 points</li>
            </ul>
        </div>
    </div>
</div>