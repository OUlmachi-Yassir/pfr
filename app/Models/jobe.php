<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobe extends Model
{
    use HasFactory;

    protected $fillable = ['enterprise_id', 'titre', 'discreption', 'competence', 'type'];
    
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }
    public function posts()
    {
        return $this->hasMany(post::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
