@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Assign Class for <b>{{$teacher->name}}</b></div>
                    <div class="panel-body">
                        <form action="{{url('users/saveTeacherClasses/'.$teacher->id)}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                    <select id="classes" name="classes[]" multiple="multiple" class="form-control controlWidth">
                                        @foreach($classes as $class)
                                            <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#classes').multiselect({
                includeSelectAllOption: true,
                enableFiltering: true,
                buttonWidth: '400px'
            });
        });
    </script>
@endsection