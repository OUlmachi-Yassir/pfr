<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'logo',
        'slogan',
        'industrie',
        'discreption',
    ];

    // Define relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jobe()
    {
        return $this->hasMany(jobe::class);
    }
}
