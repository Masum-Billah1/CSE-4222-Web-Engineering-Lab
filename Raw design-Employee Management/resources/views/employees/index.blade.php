
@extends('layout')

@section('page-content')

    <p class="text-end">
        <a class="btn btn primary" href="{{route('employee.create')}}">New Book</a>
    </p>

  <body>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Job Title</th>
                <th>Joining Date</th>
                <th>Salary</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employeess as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->job_title}}</td>
                    <td>{{$employee->joining_date}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->mobile_no}}</td>
                    <td><a href="{{route('employee.show', $employee->id)}}">Details</a></td>
                    <form method="POST" action="{{route('books.destroy', $employee->id)}}" onsubmit="return confirm(sure?)">
                        @csrf
                        @method('delete')
                        <input class="btn btn-link" type="submit" value="detete">
                    </form>
                    <td><a href="{{route('employee.show', $employee->id)}}">Detete </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{$employeess->links()}}
@endsection