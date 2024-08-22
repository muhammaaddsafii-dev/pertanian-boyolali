<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanjungSariLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanjungsari_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function tanjungsari()
    {
        return $this->belongsTo(TanjungSari::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
