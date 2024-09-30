<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employee = Employee::paginate(10);
        return view('employees.index')->with('employeess',$employee);

        // $employee=Employee::paginator();
        // return view('index')->with('employee',$employee);
    }

    public function show($id){

        $employee = Employee::find($id);

        return view('employees.show')->with('employee',$employee);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'name' => 'required|string|max:255',
            'joining_date' => 'required|date',
            'job_title' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'email' => 'required|email|unique:employees,email',
            'mobile_no' => 'required|string|max:20',
            'address' => 'required|string|max:255'
        ]);
        $employ= Employee::create($request->all());
        // dd($employ);
        $employ->save();
        return redirect()->route('employee.show',$employ->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        return 'book deleted' ;
    }
}
