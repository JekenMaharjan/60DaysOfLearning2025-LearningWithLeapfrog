<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    protected $fillable = [
        'check_in',
        'check_out',
        'employee_id',
    ];
}
