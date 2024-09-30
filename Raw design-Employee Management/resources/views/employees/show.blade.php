
@extends('layout')

@section('page-content')
   <a href="{{route('employee.index')}}"> Back </a>
    <h1> Hello Laravel<h1>

        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <td>{{$employee->id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$employee->name}}</td>
            </tr>
            <tr>
                <th>Job Title</th>
                <td>{{$employee->job_title}}</td>
            </tr>
            <tr>
                <th>Joining Date</th>
                <td>{{$employee->joining_date}}</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>{{$employee->salary}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$employee->email}}</td>
            </tr>
            <tr>
                <th>Mobile No</th>
                <td>{{$employee->mobile_no}}</td>
            </tr>
        </table>
@endsection