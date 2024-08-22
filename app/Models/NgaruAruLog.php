<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NgaruAruLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'ngaru_aru_id',
        'user_id',
        'changed_field',
        'old_value',
        'new_value',
    ];

    public function ngaru_aru()
    {
        return $this->belongsTo(NgaruAru::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
