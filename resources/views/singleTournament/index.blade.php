@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="/css/tournament.css">
    <link rel="stylesheet" href="/css/single-tournament.css">

    <div class="container">
        <div class="row name-row">
            <div class="col-md-12" >
                <h1>{{$tournament -> name}}</h1>
            </div>
        </div>
        <div>
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#information" role="tab">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#scores" role="tab">Scores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#matches" role="tab">Matches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#my-matches" role="tab">My matches</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="information" role="tabpanel">@include('singleTournament.partials.information')</div>
            <div class="tab-pane fade" id="scores" role="tabpanel">@include('singleTournament.partials.scores')</div>
            <div class="tab-pane fade" id="matches" role="tabpanel">@include('singleTournament.partials.matches')</div>
            <div class="tab-pane fade" id="my-matches" role="tabpanel">@include('singleTournament.partials.my-matches')</div>
        </div>
    </div>

@endsection