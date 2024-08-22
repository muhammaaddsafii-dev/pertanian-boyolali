<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanyudonoLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'banyudono_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function banyudono()
    {
        return $this->belongsTo(Banyudono::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
