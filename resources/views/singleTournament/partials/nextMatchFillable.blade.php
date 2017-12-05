@if(!is_null($nextMatch))
    Your next match should be against {{ $nextMatch -> opponent(Auth::user()) -> name }}
    Score:
    <form method="post" action="">
        <label for="you">You</label>
        <input id="you" name="you">
        <input id=opponent name="opponent">
        <label for="opponent">{{ $nextMatch -> opponent(Auth::user()) -> name }}</label>
        <button>Submit</button>
    </form>
@endif