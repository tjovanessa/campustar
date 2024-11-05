<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopCampus extends Model
{
    use HasFactory;

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
    
}
