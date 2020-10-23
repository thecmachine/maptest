<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * Get the street via relationship
     */
    public function street()
    {
        return $this->hasOne('App\Models\Street');
    }

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

    function isEven($number){ 
        if($number % 2 == 0){ 
            return true;
        } 
        else{ 
            return false;
        } 
    } 
}
