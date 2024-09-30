@extends('layout')

@section('page-content')

<a href="{{route('employee.index')}}"> Back </a>
    <legend>Create Employee</legend>
    <form action="{{route('employee.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter employee name" value="{{old('name')}}">
        </div>
    
        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" class="form-control" name="job_title" placeholder="Enter job title" required >
        </div>
    
        <div class="mb-3">
            <label for="joining_date" class="form-label">Joining Date</label>
            <input type="date" class="form-control" name="joining_date" required>
        </div>
    
        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" class="form-control" name="salary" placeholder="Enter salary" step="0.01" required>
        </div>
    
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
        </div>
    
        <div class="mb-3">
            <label for="mobile_no" class="form-label">Mobile No</label>
            <input type="text" class="form-control" name="mobile_no" placeholder="Enter mobile number" required>
        </div>
    
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter address" rows="3" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection

