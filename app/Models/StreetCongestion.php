<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreetCongestion extends Model
{
    use HasFactory;

     /**
     * Get the street via relationship
     */
    public function street()
    {
        return $this->hasOne('App\Models\Street');
    }
}
