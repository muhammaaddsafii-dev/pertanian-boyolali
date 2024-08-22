<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JembunganLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'jembungan_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function jembungan()
    {
        return $this->belongsTo(Jembungan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
