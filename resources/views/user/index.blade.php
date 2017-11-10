@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/tournament.css">
    <link rel="stylesheet" href="/css/user.css">
    <div class="container">
        @include('user.partials.userInfo', ['user' => $user])
        <div class="container">
            <h1>Tournaments currently being organized by you</h1>
            <ul>
                @foreach($activeOrganizedTournaments as $tournament)
                    <li>{{ $tournament -> name }}</li>
                @endforeach
            </ul>
            <h1>Past organized tournament</h1>
            <ul>
                @foreach($pastOrganizedTournaments as $tournament)
                    <li>{{ $tournament -> name }}</li>
                @endforeach
            </ul>
            <h1>Participating in active</h1>
            <ul>
                @foreach($currentlyParticipatingIn as $tournament)
                    <li>{{ $tournament -> name }}</li>
                    <ul>
                    @foreach($tournament -> matches as $match)
                            <li>Match against {{ $match -> opponent -> name }} <br>
                                Date: {{ $match -> datetime }} <br>
                                Location: {{ $match -> location }}
                            </li>
                    @endforeach
                    </ul>
                @endforeach
            </ul>
            <h1>Participated in</h1>
            <ul>
                @foreach($participatedIn as $tournament)
                    <li>{{ $tournament -> name }}</li>
                @endforeach
            </ul>
            {{--@if(count($tournaments) > 0)--}}
                {{--<div>--}}
                    {{--@foreach($tournaments as $tournament)--}}
                        {{--@include('layouts.partials.tournamentWithMatch', ['tournament' => $tournament])--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--@else--}}
                {{--<h2>There are no tournaments you are participating in.</h2>--}}
            {{--@endif--}}
        </div>
    </div>
@endsection
