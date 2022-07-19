<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Providers\RouteServiceProvider;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    public function __construct() {
      $this->middleware('auth', ['except' => ['']]);
      $this->middleware('verified', ['except' => ['']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Inertia::render('Employee/Index', [
        'data' => Employee::paginate(10)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      return Inertia::render('Employee/Create', [
        'companyId' => $id
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'name' => ['required'],
        'lastname' => ['required'],
        'company_id' => ['required'],
        'email' => ['email', 'nullable'],
        'phone' => ['nullable'],
      ]);

      $employee = Employee::create($validated);

      return redirect()->route('company', ['companyId' => $employee->company_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return Inertia::render('Employee/Employee', [
        'data' => Employee::with('company')->findOrFail($id)
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return Inertia::render('Employee/Edit', [
        'data' => Employee::findOrFail($id)
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validated = $request->validate([
        'name' => ['nullable'],
        'lastname' => ['nullable'],
        'email' => ['email', 'nullable'],
        'phone' => ['nullable'],
      ]);

      $employee = Employee::findOrFail($id);

      if($validated['name']!=null)
        $employee->name = $validated['name'];
      if($validated['lastname']!=null)
        $employee->lastname = $validated['lastname'];
      if($validated['email']!=null)
        $employee->email = $validated['email'];
      if($validated['phone']!=null)
        $employee->phone = $validated['phone'];

      $employee->save();

      return redirect()->route('employee', ['employeeId' => $employee->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Employee::destroy($id);
      return redirect()->back();
    }
}
