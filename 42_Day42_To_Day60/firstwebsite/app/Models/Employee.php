<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function attendances() {
        return $this->hasMany(Attendance::class);
    }

    protected $fillable = ['name'];

}
