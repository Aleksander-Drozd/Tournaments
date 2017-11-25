<div class="row name-row">
    <div class="col-md-10" >
        <h1>{{$tournament -> name}}</h1>
        @guest
        @else
            @if ($tournament -> userCanModify(Auth::user()))
                <button class="btn btn-default btn-md btn-edit btn-hoover-o" style="float: left"><span>Edit</span></button>
                <button class="btn btn-default btn-md btn-delete btn-hoover-minus" style="float: left"><span>Delete</span></button>
            @endif
        @endguest
    </div>
    <div class="col-md-2">
        <button href="#" type="button" class="btn btn-default btn-lg btn-standard btn-hoover-arrow" style="margin-top: 20px;"><span>Join</span></button>
    </div>
</div>
