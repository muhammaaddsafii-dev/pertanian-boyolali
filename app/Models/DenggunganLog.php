<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenggunganLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'denggungan_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function denggungan()
    {
        return $this->belongsTo(Denggungan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
