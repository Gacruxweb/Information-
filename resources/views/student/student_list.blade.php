@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Student') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>District</th>
                                    <th>Created By</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->roll}}</td>
                                    <td>{{$student->age}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->district}}</td>
                                    <td>{{$student->user->name}}</td>
                                    <td>
                                        <a href="{{route('student.edit',$student->id)}}" class="btn btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <Form action="{{route('student.delete',$student->id)}}" method="post">
                                            @csrf 
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </Form>
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
</div>
@endsection
