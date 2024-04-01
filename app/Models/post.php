<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'jobe_id','cv'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function jobe()
    {
        return $this->belongsTo(jobe::class);
    }

}
