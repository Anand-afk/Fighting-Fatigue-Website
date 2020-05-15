function getFreq(){
    var score = 0; 
    var freq = "";     
    var selected = 0;       
    for(var i = 1; i <= 3; i++){
        var radios = document.getElementsByName("Q"+i);
        for(var j = 0; j < radios.length; j++) {
            var radio = radios[j];    
            if(radio.value == "High" && radio.checked){
                score += 3;
                selected++;
            }
            else if(radio.value == "Medium" && radio.checked) {
                score += 2;
                selected++;
            }
            else if(radio.value == "Low" && radio.checked) {
                score += 1;
                selected++;
            }
        }
    }               
    if(score >= 7){
        freq = "High";
    }   
    else if (score >= 4){
        freq = "Medium";
    }
    else{
        freq = "Low";
    }
 
    if(selected < 3){
        alert("Please enter all fields!");
    }
    else{
        
        var freqInput = document.getElementById('freqInput');
        freqInput.value = freq;
        document.freqForm.submit();
        
    }

}
