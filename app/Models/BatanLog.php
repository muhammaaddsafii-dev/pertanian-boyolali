<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatanLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'batan_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function batan()
    {
        return $this->belongsTo(Batan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
