<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'logo',
        'slogan',
        'industrie',
        'discreption',
        'lieux',
        'fonction',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
    
}
