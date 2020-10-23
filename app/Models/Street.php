<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    /**
     * Get the city via relationship
     */
    public function city()
    {
        return $this->hasOne('App\Models\City');
    }

    /**
     * Get the state via relationship
     */
    public function state()
    {
        return $this->hasOne('App\Models\State');
    }

    /**
     * Get the zip_code via relationship
     */
    public function zip_code()
    {
        return $this->hasOne('App\Models\ZipCode');
    }
}
