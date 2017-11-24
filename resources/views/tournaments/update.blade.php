@extends('layouts.app')

@section('content')
    <form method="post" action="/tournaments">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $tournament -> id }}">

        <label for="name">Name</label>
        <input id="name" name="name" value="{{ $tournament -> name }}">
        <label for="game">Game</label>
        <select id="game" name="game">
            @foreach($games as $game)
                <option value="{{ $game -> id }}">{{ $game -> name }}</option>
            @endforeach
        </select>
        <label for="elimination-type">Elimination type</label>
        <select id="elimination-type" name="elimination-type">
            <option value="all-on-all">All on all</option>
        </select>
        <label for="start-date">Start date</label>
        <input type="date" id="start-date" name="start-date">
        <label for="end-date">End date</label>
        <input type="date" id="end-date" name="end-date">
        <label for="min-participants">Min participants</label>
        <input id="min-participants" name="min-participants">
        <label for="max-participants">Min participants</label>
        <input id="max-participants" name="max-participants">
        <label for="location">Location</label>
        <input id="location" name="location">
        <label for="online">Online</label>
        <input type="checkbox" id="online" name="online" value="1">
        <label for="description">Description</label>
        <input id="description" name="description">
        <label for="participants-info">Info for participants</label>
        <input id="participants-info" name="participants-info">
        <label for="statute">Statute</label>
        <input id="statute" name="statute">
        <button>Update</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
