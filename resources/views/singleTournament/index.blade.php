@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="/css/tournaments.css">
    <link rel="stylesheet" href="/css/single-tournament.css">

    <div class="container">
        <div class="row">
            <div class="col-md-12 indented" >
                <h1>{{$tournament -> name}}</h1>
            </div>
        </div>
        <div class="row indented">
            <div class="col-md-9 indented">
                <div>
                    <h2>Details</h2>
                    <div class="indented">
                        <div>
                            <h3>Game</h3>
                            <p>{{$tournament -> game}}</p>
                        </div>
                        <div>
                            <h3>Where</h3>
                            <p>{{$tournament -> location}}</p>
                        </div>

                        <div>
                            <h3>When</h3>
                            <p>Begins @ {{$tournament -> start_date}}</p>
                            <p>Ends @ {{$tournament -> end_date}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="indented">
                    <div>
                        <h2>Rewards</h2>
                    </div>
                    <div>
                        <h2>Points</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection