@if(!is_null($nextMatch))
    <div>
        <div class="row">
            <h3> Your next match should be against: {{ $nextMatch -> opponent(Auth::user()) -> name }}</h3><br>
        </div>
        <div class="row">
            <h4 style="margin-bottom: 0">Score:</h4>
        </div>
        <div class="row">

            <form method="post" action="">
                <label for="you">You</label>
                <input id="you" name="you">
                <input id=opponent name="opponent">
                <label for="opponent">{{ $nextMatch -> opponent(Auth::user()) -> name }}</label>
                <button class="btn btn-standard btn-join" style="float: none; margin-left:30px">Submit score</button>
            </form>
        </div>
    </div>
@endif