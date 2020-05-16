<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\HighSeverity;
use App\MediumSeverity;
use App\LeastSeverity;

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

    public function index(Request $request){
        $input = $request->all();
        $score = 0;
        $freq = "";
        $selected = 0;

        if ($input['freq']=='Low'){
            $severity="high";
        $highSeverity = LeastSeverity::all();
        return view('welcome',compact('highSeverity','severity'));
        }
        if($input['freq']=='High'){
            $severity="low";
        $highSeverity = HighSeverity::all();
        return view('welcome',compact('highSeverity','severity'));
        }
        if($input['freq']=='medium'){
            $severity="medium";
        $highSeverity = MediumSeverity::all();
        return view('welcome',compact('highSeverity','severity'));
        }
    }
}
