<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuwranLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'kuwran_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function kuwran()
    {
        return $this->belongsTo(Kuwran::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
