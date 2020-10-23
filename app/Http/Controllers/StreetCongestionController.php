<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreetCongestionController extends Controller
{
    
    function isStreetCongested($street){
        //query database if $street has a StreetCongestion record
    }

    function setStreetToCongested($street){
        //add record to StreetCongestion for $street
    }
}
