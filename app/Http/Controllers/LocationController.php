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

        // for($i = 1; $i <= 3; $i++){
        //     var radios = document.getElementsByName("Q"+i);
        //     for(var j = 0; j < radios.length; j++) {
        //         var radio = radios[j];    
        //         if(radio.value == "High" && radio.checked){
        //             score += 3;
        //             selected++;
        //         }
        //         else if(radio.value == "Medium" && radio.checked) {
        //             score += 2;
        //             selected++;
        //         }
        //         else if(radio.value == "Low" && radio.checked) {
        //             score += 1;
        //             selected++;
        //         }
                
        //     }
        // }    
        if ($input['freq']=='Low'){
            $severity="least";
        $highSeverity = LeastSeverity::all();
        return view('welcome',compact('highSeverity','severity'));
        }
        if($input['freq']=='High'){
            $severity="high";
        $highSeverity = HighSeverity::all();
        return view('welcome',compact('highSeverity','severity'));
        }
        if($input['freq']=='Medium'){
            $severity="medium";
        $highSeverity = MediumSeverity::all();
        return view('welcome',compact('highSeverity','severity'));
        }
    }
}

       
// for(var i = 1; i <= 3; i++){
//     var radios = document.getElementsByName("Q"+i);
//     for(var j = 0; j < radios.length; j++) {
//         var radio = radios[j];    
//         if(radio.value == "High" && radio.checked){
//             score += 3;
//             selected++;
//         }
//         else if(radio.value == "Medium" && radio.checked) {
//             score += 2;
//             selected++;
//         }
//         else if(radio.value == "Low" && radio.checked) {
//             score += 1;
//             selected++;
//         }
        
//     }
// }               
// if(score >= 7){
//     freq = "High";
// }   
// else if (score >= 4){
//     freq = "Medium";
// }
// else{
//     freq = "Low";
// }

// if(selected < 3){
//     alert("Please enter all fields!");
// }
// else{
//     alert("Alert frequency: " + freq);
// }
