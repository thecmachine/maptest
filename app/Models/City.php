<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    //relationships for state, lat, long, zip
    /**
     * Get the state via relationship
     */
    public function state()
    {
        return $this->hasOne('App\Models\State');
    }

    /**
     * Get the latitude via relationship
     */
    public function latitude()
    {
        return $this->hasOne('App\Models\Latitude');
    }

    /**
     * Get the longitude via relationship
     */
    public function longitude()
    {
        return $this->hasOne('App\Models\Longitude');
    }

    /**
     * Get the zip_code via relationship
     */
    public function zip_code()
    {
        return $this->hasOne('App\Models\ZipCode');
    }
}
