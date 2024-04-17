<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'enterprise_id',
        'name',
        'description',
        'type',
    ];

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }
}
