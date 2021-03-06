@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('language.edit')</div>

                    <div class="panel-body">
                        <form action="{{url('subjects/'.$subject->id)}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group">
                                <input type="text" placeholder="name" name="name" class="form-control" value="{{$subject->name}}" required>
                            </div>

                            <div class="form-group">
                                <input type="submit"  class="btn btn-info" value="{{trans('language.update')}}">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection