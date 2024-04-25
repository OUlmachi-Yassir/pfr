<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['jobe_id', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobe()
    {
        return $this->belongsTo(Jobe::class);
    }
}
