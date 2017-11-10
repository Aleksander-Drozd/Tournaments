@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="/css/tournament.css">
    <link rel="stylesheet" href="/css/single-tournament.css">

    <div class="container">
        @include("singleTournament.partials.tournamentPageHeader")
        @include("singleTournament.partials.tournamentPageNavTabs")
    </div>
@endsection
