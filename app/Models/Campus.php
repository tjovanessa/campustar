<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    public function topCampuses()
    {
        return $this->hasMany(TopCampus::class);
    }

    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }
    
}
