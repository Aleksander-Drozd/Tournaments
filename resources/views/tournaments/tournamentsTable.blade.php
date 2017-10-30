<link rel="stylesheet" href="/css/tournament.css">
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Game</th>
            <th>Type</th>
            <th>Starts</th>
            <th>Ends</th>
            <th>Participants</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tournaments as $tournament)
            <tr>
                <td class="name"><a href="/tournaments/{{ $tournament -> id }}">{{ $tournament -> name }}</a></td>
                <td>{{ $tournament -> game }}</td>
                <td>{{ $tournament -> elimination_type }}</td>
                <td>{{ $tournament -> start_date }}</td>
                <td>{{ $tournament -> end_date }}</td>
                <td class="capacity">{{ $tournament -> capacity }}</td>
            </tr>
        @endforeach
    </tbody>
</table>