<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    
    function sameSideOfStreet($location1, $location2){
        //comparison $location1->isEven() with $location2->isEven()
        //if the same, the locations are on the same side of street
        if($location1->isEven($location1->address) == $location2->isEven($location2->address)){
            return true;
        }else{
            return false;
        }
    }

    function distanceBetweenLocations($location1, $location2){
        //I'd need a pathfinding implementation for this to work
        //We could call that library and return $distance
        $distance = 2; //Distance in Miles, using hardcoded value
        return $distance;
    }


}
