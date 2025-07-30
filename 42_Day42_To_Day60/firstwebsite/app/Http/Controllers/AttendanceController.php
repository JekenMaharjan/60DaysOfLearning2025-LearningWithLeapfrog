<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index() {
        $employees = Employee::all();

    $today = now()->toDateString();

    $attendances = Attendance::whereDate('created_at', $today)
        ->get()
        ->keyBy('employee_id'); // so you can do $attendances[$employee->id]

    return view('attendance.index', compact('employees', 'attendances'));
    }

    public function checkIn(Employee $employee) {
        $today = now()->toDateString();

        $existing = Attendance::where('employee_id', $employee->id)
                    ->whereDate('created_at', $today)->first();

        if ($existing && $existing->check_in) {
            return back()->with('error', 'Already checked in!');
        }

        Attendance::create([
            'employee_id' => $employee->id,
            'check_in' => now(),
        ]);

        return back()->with('success', 'Checked in successfully.');
    }

    public function checkOut(Employee $employee) {
        $today = now()->toDateString();

        $attendance = Attendance::where('employee_id', $employee->id)
                    ->whereDate('created_at', $today)->first();

        if (!$attendance || !$attendance->check_in) {
            return back()->with('error', 'Check-in first!');
        }

        if ($attendance->check_out) {
            return back()->with('error', 'Already checked out!');
        }

        $attendance->update(['check_out' => now()]);

        return back()->with('success', 'Checked out successfully.');
    }
}
