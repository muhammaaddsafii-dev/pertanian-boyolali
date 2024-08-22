<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DukuhLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'dukuh_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function dukuh()
    {
        return $this->belongsTo(Dukuh::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
