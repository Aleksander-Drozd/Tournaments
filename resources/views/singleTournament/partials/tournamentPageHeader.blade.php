<div class="row name-row">
    <div class="col-md-10" >
        <h1>{{$tournament -> name}}</h1>
        @guest
        @else
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
                @endguest
    </div>
    <div class="col-md-2">
        <button href="#" type="button" class="btn btn-default btn-lg btn-standard btn-hoover-arrow" style="margin-top: 20px;"><span>Join</span></button>
    </div>
</div>
