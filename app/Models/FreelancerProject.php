<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'freelancer_id',
        'project_id',
    ];
    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

