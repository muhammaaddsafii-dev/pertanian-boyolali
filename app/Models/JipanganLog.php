<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JipanganLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'jipangan_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function jipangan()
    {
        return $this->belongsTo(Jipangan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
