@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Courses</div>

                    <div class="panel-body">

                        <a href="{{url('subjects/create')}}" class="btn btn-lg btn-success">Create a Subject</a>


                        <table class="table table-responsive table-bordered marginTop">
                            <thead>
                            <th>Name</th>
                            <th>Assign Students</th>
                            <th colspan="2">Actions</th>
                            </thead>

                            <tbody>

                                @foreach($subjects as $subject)
                                    <tr>
                                    <td>{{$subject->name}}</td>
                                    <td><a href="{{url('subjects/assignTeacher/'.$subject->id)}}" class="btn btn-warning">Assign Teacher</a> </td>
                                    <td> <a href="{{url('subjects/'.$subject->id.'/edit')}}"  value="Edit" class="btn btn-info btn-group-sm "> Edit</a> </td>

                                    <td>
                                        <form action="{{url('subjects/'.$subject->id)}}" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection