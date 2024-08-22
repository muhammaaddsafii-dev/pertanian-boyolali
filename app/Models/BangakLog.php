<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangakLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'bangak_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function bangak()
    {
        return $this->belongsTo(Bangak::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
