<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::paginate(5);
        return view('Employee.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee.create');
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
            'name' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'joinDate' => 'required',
            'experience' => 'required',
        ]);
        Employees::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->birthdate,
            'position' => $request->position,
            'salary' => $request->salary,
            'joinDate' => $request->joinDate,
            'experience' => $request->experience,
            'department_id' => 1
        ]);
        return redirect('/employee/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = Employees::findOrFail($id);
        return view('Employee.show', ['employees' => $employees]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employees::find($id);
        return view('Employee.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employees::find($id);

        $validatedAttributes =
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'birthdate' => 'required',
                'position' => 'required',
                'salary' => 'required',
                'joinDate' => 'required',
                'experience' => 'required',
            ]);

        $employee->update($validatedAttributes);

        return redirect('/employee/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Employees = Employees::find($id);
        $Employees->delete();
        return redirect('/employee/index');
    }
}
