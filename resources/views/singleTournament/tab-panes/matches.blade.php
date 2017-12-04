<div>
    <ul>
        @foreach($matches as $match)
            <li>Date: {{ $match -> datetime }}
                Player 1: {{ $match -> playerOne -> name }}
                Player 2: {{ $match -> playerTwo -> name }}
            </li>
        @endforeach
    </ul>
</div>
