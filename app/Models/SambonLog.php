<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SambonLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'sambon_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function sambon()
    {
        return $this->belongsTo(Sambon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
