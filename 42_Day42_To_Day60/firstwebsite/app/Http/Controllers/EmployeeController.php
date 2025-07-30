<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create() {
        return view('employee.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Employee::create(['name' => $request->name]);

        return redirect()->route('employees.index')->with('alert', 'Employee ' . ' [ ' . $request->name. ' ] ' . ' is added.');
    }

    public function destroy(Employee $employee) {
        $employee->delete();
        return back()->with('success', 'Employee deleted.');
    }
}
