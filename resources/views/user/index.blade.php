@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/tournament.css">
    <link rel="stylesheet" href="/css/user.css">
    <div class="container">
        @include('user.partials.userInfo', ['user' => $user])
        <div class="container">
            <h1>Tournaments</h1>
            @if(count($tournaments) > 0)
                <div>
                    @foreach($tournaments as $tournament)
                        @include('layouts.partials.tournamentWithMatch', ['tournament' => $tournament])
                    @endforeach
                </div>
            @else
                <h2>There are no tournaments you are participating in.</h2>
            @endif
        </div>
    </div>
@endsection
