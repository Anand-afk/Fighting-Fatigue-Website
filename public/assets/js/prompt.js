var sportsInfo = [];
var entertainmentInfo = [];
var healthInfo = [];
var businessInfo = [];



function setSports(){
    var category = "sports";
    getJson(category, sportsInfo);
}

function setEntertainment(){
    var category = "entertainment";
    getJson(category, entertainmentInfo);
}

function setHealth(){
    var category = "health";
    getJson(category, healthInfo);
}

function setBusiness(){
    var category = "business";
    getJson(category, businessInfo);
}

window.onload = function(){
    setSports();
    setEntertainment();
    setHealth();
    setBusiness();
}

function getJson(category, array){
    var request = new XMLHttpRequest();
    var requestURL = "https://newsapi.org/v2/top-headlines?country=au&category="+category+"&apiKey=8f6d87bb2fed4866a2e78c684776f53b";
    const proxyurl = "https://cors-anywhere.herokuapp.com/";
    const url = requestURL;
    var result = fetch(proxyurl + url)
    result.then(function(response) {
        return response.json();
    }).then(function(data) {
        console.log(data);
        getNews(array, data);
        getPrompts();
    });
}

function getNews(array, jsonObj) {
    var titles = jsonObj['articles'];
    for(var i = 0; i < titles.length; i++){
        array.push({"title": titles[i].title, "image": titles[i].urlToImage, "link": titles[i].url});
    }
}

function getPrompts(buttonID){
    if(document.getElementById("category").innerText == "Sports"){
        displayTitle(sportsInfo);
        if(buttonID == "prev"){
            displayTitle(businessInfo);
            document.getElementById("category").innerText = "Business";
        }
        else if(buttonID == "next"){
            displayTitle(entertainmentInfo);
            document.getElementById("category").innerText = "Entertainment";
        }
    }
    else if(document.getElementById("category").innerText == "Entertainment"){
        displayTitle(entertainmentInfo);
        if(buttonID == "prev"){
            displayTitle(sportsInfo);
            document.getElementById("category").innerText = "Sports";
        }
        else if(buttonID == "next"){
            displayTitle(healthInfo);
            document.getElementById("category").innerText = "Health";
        }
    }
    else if(document.getElementById("category").innerText == "Health"){
        displayTitle(healthInfo);
        if(buttonID == "prev"){
            displayTitle(entertainmentInfo);
            document.getElementById("category").innerText = "Entertainment";
        }
        else if(buttonID == "next"){
            displayTitle(businessInfo);
            document.getElementById("category").innerText = "Business";
        }
    }
    else if(document.getElementById("category").innerText == "Business"){
        displayTitle(businessInfo);
        if(buttonID == "prev"){
            displayTitle(healthInfo);
            document.getElementById("category").innerText = "Health";
        }
        else if(buttonID == "next"){
            displayTitle(sportsInfo);
            document.getElementById("category").innerText = "Sports";
        }
    }
}

function displayTitle(array){
    for(var i=0; i<array.length; i++){
        var j = i+1;
        if(document.getElementById("Q"+j)){
            document.getElementById("linkT"+j).href = array[i].link;
            document.getElementById("displayT"+j).innerText = array[i].title;
            if (array[i].image) {
                document.getElementById("imgT"+j).src = array[i].image;
            }
            else{
                document.getElementById("imgT"+j).src = "";
            }
            document.getElementById("imgT"+j).style.height = "62vw";
        }
    }
}

var synth = window.speechSynthesis;
var spoken = null;
function speak(textID){
    for(var i=0; i<20; i++){
        var j = i+1;

        if (!synth.speaking) {
            if(textID == "listenT"+j){
                var txt = document.getElementById("displayT"+j).innerText;

            }

        }
        else{

            synth.cancel();
            return;

        }


    }



    if (txt !== '') {
        var utterThis = new SpeechSynthesisUtterance(txt);
        var voices = speechSynthesis.getVoices();
        utterThis.voiceURI = 'native';
        utterThis.voice = voices[1];
        utterThis.pitch = 1;
        utterThis.rate = 0.9;
        synth.speak(utterThis);


    }
}

