@extends('layouts.app')

@section('content')
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <form method="post" action="/tournaments">
        {{ csrf_field() }}
        <label for="name">Name</label>
        <input id="name" name="name" value="{{ old('name') }}">
        <label for="game">Game</label>
        <select id="game" name="game" value="{{ old('game') }}">
            @foreach($games as $game)
                <option value="{{ $game -> id }}">{{ $game -> name }}</option>
            @endforeach
        </select>
        <label for="elimination-type">Elimination type</label>
        <select id="elimination-type" name="elimination-type">
            <option value="all-on-all">All on all</option>
        </select>
        <label for="start-date">Start date</label>
        <input type="date" id="start-date" name="start-date" value="{{ old('start-date') }}">
        <label for="end-date">End date</label>
        <input type="date" id="end-date" name="end-date" value="{{ old('end-date') }}">
        <label for="min-participants">Min participants</label>
        {{--it would be better, if these two inputs below had input=number, but i don't know how to hide
        those unsightly arrows--}}
        <input id="min-participants" name="min-participants" value="{{ old('min-participants') }}">
        <label for="max-participants">Min participants</label>
        <input id="max-participants" name="max-participants" value="{{ old('max-participants') }}">
        <label for="location">Location</label>
        <input id="location" name="location" value="{{ old('location') }}">
        <label for="online">Online</label>
        <input  id="online" name="online" value="1">
        <label for="description">Description</label>
        <input id="description" name="description" value="{{ old('description') }}">
        <label for="participants-info">Info for participants</label>
        <input id="participants-info" name="participants-info" value="{{ old('participants-info') }}">
        <label for="statute">Statute</label>
        <input id="statute" name="statute" value="{{ old('statute') }}">
        <button>Create</button>
    </form>

    {{-- custom error messages - https://laravel.com/docs/5.5/validation --}}
    {{-- maybe css styles on wrong filled inputs? --}}
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
