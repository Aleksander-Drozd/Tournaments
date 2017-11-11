@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/tournament.css">
    <link rel="stylesheet" href="/css/user.css">
    <div class="container">
        @include('user.partials.userInfo', ['user' => $user])
        <nav class="nav">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active">
                    <a data-toggle="tab" href="#organized" role="tab">Organized by you</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#participated" role="tab">Participated by you</a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div class="tab-pane in active" id="organized" role="tabpanel">
                @include('user.partials.userOrganizedTournaments', ['active' => $activeOrganizedTournaments, 'past' => $pastOrganizedTournaments])
            </div>
            <div class="tab-pane" id="participated" role="tabpanel">
                @include('user.partials.userParticipatedTournaments', ['active' => $currentlyParticipatingIn, 'past' => $participatedIn])
            </div>
        </div>
    </div>
@endsection
