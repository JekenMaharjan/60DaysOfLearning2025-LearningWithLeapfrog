<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'amount',
        'category',
        'note',
        'date',
        // no need to add 'user_id' here if you are using Auth::user()->expenses()->create()
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
