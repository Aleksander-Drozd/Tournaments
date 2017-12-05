<div>
    @auth()
        Your next match should be against {{ $nextMatch -> opponent(Auth::user()) -> name }}
        Score:
        <form method="post" action="">
            <label for="you">You</label>
            <input id="you" name="you">
            <input id=opponent name="opponent">
            <label for="opponent">{{ $nextMatch -> opponent(Auth::user()) -> name }}</label>
            <button>Submit</button>
        </form>
        <ul>
            Next matches
            @foreach($matches as $match)
                <li>against {{ $match -> opponent(Auth::user()) -> name }}</li>
            @endforeach
        </ul>
    @endauth
</div>
