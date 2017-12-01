<div class="row name-row">
    <div class="col-md-10" >
        <h1>{{$tournament -> name}}</h1>
        @auth
            @if ($tournament -> userCanModify(Auth::user()))
                    <a href="/tournaments/{{ $tournament -> id }}/edit">
                        <button class="btn btn-default btn-md btn-edit btn-hoover-o" style="float: left">
                            <span>Edit</span>
                        </button>
                    </a>
                    <form method="post" action="/tournaments/{{ $tournament -> id }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-default btn-md btn-delete btn-hoover-minus" style="float: left">
                            <span>Delete</span>
                        </button>
                    </form>
                @endif
        @endauth
    </div>
        <div class="col-md-2">
            @auth()
                @if($tournament -> isFuture())
                    <form method="post" action="/tournaments/{{ $tournament -> id }}/users">
                        {{ csrf_field() }}
                        @if(Auth::user() -> isSignedUpTo($tournament))
                            {{ method_field('DELETE') }}
                            <button class="btn btn-default btn-lg btn-standard btn-hoover-arrow" style="margin-top: 20px;"><span>Leave</span></button>
                        @else
                            <button class="btn btn-default btn-lg btn-standard btn-hoover-arrow" style="margin-top: 20px;"><span>Join</span></button>
                        @endif
                    </form>
                @else
                    @if(Auth::user() -> isSignedUpTo($tournament))
                        You're participating in this tournament
                    @endif
                @endif
            @endauth
        </div>


</div>
