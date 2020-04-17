<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function saveloc(Request $request){
       
        $input = $request -> all();
        $lat = $input['lat'];
        $long = $input['long'];
        $location = new Location();
        $location->latitude = $lat;
        $location->longitude = $long;    
        $location->save();
        return ['success' => true, 'message' => 'Location inserted successfully'];
    } 
}
