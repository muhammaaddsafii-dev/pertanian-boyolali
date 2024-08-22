<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CangkringanLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'cangkringan_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function cangkringan()
    {
        return $this->belongsTo(Cangkringan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
