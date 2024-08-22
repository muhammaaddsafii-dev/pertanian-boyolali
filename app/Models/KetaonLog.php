<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetaonLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'ketaon_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function ketaon()
    {
        return $this->belongsTo(Ketaon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
