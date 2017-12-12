@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="/js/awardFieldsGenerator.js"></script>
    <form class="form-horizontal" method="post" action="/tournaments">
        {{ csrf_field() }}

        <div class="container">
            <h1 style="text-align: center; margin-bottom: 30px">Creating new tournament</h1>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-6">
                    <input id="name" class="form-control" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('game') ? ' has-error' : '' }}">
                <label for="game" class="col-md-4 control-label" >Game</label>
                <div class="col-md-6">
                    <select id="game" class="form-control" name="game" value="{{ old('game') }}">
                        @foreach($games as $game)
                            <option value="{{ $game -> id }}">{{ $game -> name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('game'))
                        <span class="help-block">
                            <strong>{{ $errors->first('game') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('elimination-type') ? ' has-error' : '' }}">
                <label for="elimination-type" class="col-md-4 control-label" >Elimination type</label>
                <div class="col-md-6">
                    <select id="elimination-type" class="form-control dropdown" name="elimination-type">
                        <option value="all-on-all">All on all</option>
                    </select>
                    @if ($errors->has('elimination-type'))
                        <span class="help-block">
                            <strong>{{ $errors->first('elimination-type') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('start-date') ? ' has-error' : '' }}">
                <label for="start-date" class="col-md-4 control-label" >Start date</label>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="start-date" name="start-date" value="{{ old('start-date') }}">
                    @if ($errors->has('start-date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('start-date') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-2">
                    <input type="time" class="form-control" id="start-time" name="start-time" value="{{ old('start-time') }}">
                    @if ($errors->has('start-time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('start-time') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('end-date') ? ' has-error' : '' }}">
                <label for="end-date" class="col-md-4 control-label" >End date</label>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="end-date" name="end-date" value="{{ old('end-date') }}">
                    @if ($errors->has('end-date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('end-date') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-2">
                    <input type="time" class="form-control" id="end-time" name="end-time" value="{{ old('end-time') }}">
                    @if ($errors->has('end-time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('end-time') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('min-participants') ? ' has-error' : '' }}">
                <label for="min-participants" class="col-md-4 control-label" >Min participants</label>
                {{--it would be better, if these two inputs below had input=number, but i don't know how to hide
        those unsightly arrows--}}
                <div class="col-md-6">
                    <input id="min-participants" class="form-control" name="min-participants" value="{{ old('min-participants') }}">
                    @if ($errors->has('min-participants'))
                        <span class="help-block">
                            <strong>{{ $errors->first('min-participants') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('max-participants') ? ' has-error' : '' }}">
                <label for="max-participants" class="col-md-4 control-label" >Max participants</label>
                <div class="col-md-6">
                    <input id="max-participants" class="form-control" name="max-participants" value="{{ old('max-participants') }}">
                    @if ($errors->has('max-participants'))
                        <span class="help-block">
                            <strong>{{ $errors->first('max-participants') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                <label for="location" class="col-md-4 control-label" >Location</label>
                <div class="col-md-6">
                    <input id="location" class="form-control" name="location" value="{{ old('location') }}">
                    @if ($errors->has('location'))
                        <span class="help-block">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('online') ? ' has-error' : '' }}">
                <label for="online" class="col-md-4 control-label" >Online</label>
                <div class="col-md-6">
                    <input type="checkbox" class="form-control" id="online" name="online" value="1">
                    @if ($errors->has('online'))
                        <span class="help-block">
                            <strong>{{ $errors->first('online') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div id="awards" class="form-group">
                <div id="row0" class="row">
                    <label for="awards" class="col-md-4 control-label">Awards</label>
                    <div class="col-md-2">
                        <input type=number min="1" class="form-control" placeholder="Place" value="{{ old('awards.0.place') }}" name="awards[0][place]">
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" placeholder="Prize" value="{{ old('awards.0.prize') }}" name="awards[0][prize]">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-num-control btn-minus" onclick="removeAwardRow(0)"><span>-</span></button>
                    </div>
                </div>
                <script>
                    window.onload=function () {
                        @if(count(old('awards')) > 1)
                            @foreach(array_slice(old('awards'), 1) as $award)
                              addAwardRow('{{ $award['place'] }}', '{{ $award['prize'] }}');
                            @endforeach
                        @endif
                    }
                </script>
                <div class="row">
                    <div class="col-md-1 col-md-offset-4">
                        <button type="button" class="btn btn-num-control btn-plus" onclick="addAwardRow()"><span>+</span></button>
                    </div>
                </div>
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description" class="control-label col-md-4" >Description</label>
                <div class="col-md-6">
                    <textarea rows="5" class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('participants-info') ? ' has-error' : '' }}">
                <label for="participants-info" class="col-md-4 control-label" >Info for participants</label>
                <div class="col-md-6">
                    <textarea rows="4" id="participants-info" class="form-control" name="participants-info">{{ old('participants-info') }}</textarea>
                    @if ($errors->has('participants-info'))
                        <span class="help-block">
                            <strong>{{ $errors->first('participants-info') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('statute') ? ' has-error' : '' }}">
                <label for="statute" class="col-md-4 control-label" >Statute</label>
                <div class="col-md-6">
                    <textarea id="statute" class="form-control" rows="5" name="statute">{{ old('statute') }}</textarea>
                    @if ($errors->has('statute'))
                        <span class="help-block">
                            <strong>{{ $errors->first('statute') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-md-4 col-md-offset-8">
                <button class="btn btn-lg btn-primary" style="margin-bottom: 50px">Create</button>
            </div>
        </div>
    </form>
@endsection
