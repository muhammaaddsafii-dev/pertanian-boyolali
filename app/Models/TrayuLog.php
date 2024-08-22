<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrayuLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'trayu_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function trayu()
    {
        return $this->belongsTo(Trayu::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
