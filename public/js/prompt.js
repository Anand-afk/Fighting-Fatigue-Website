
var request = new XMLHttpRequest();

var sportsInfo = [];
var entertainmentInfo = [];
var healthInfo = [];
var businessInfo = [];


function getJson(category, array){
  
  var requestURL = "https://newsapi.org/v2/top-headlines?country=au&category="+category+"&apiKey=8f6d87bb2fed4866a2e78c684776f53b";
  request.open('GET', requestURL);
  request.responseType = 'json';
  request.send();
  request.onload = function() {
    var jsonObj = request.response;
    getNews(array, jsonObj);
  }
}

function getNews(array, jsonObj) {
  var titles = jsonObj['articles'];
  for(var i = 0; i < 20; i++){
    array.push({"title": titles[i].title, "image": titles[i].urlToImage, "link": titles[i].url});
  }
}

function getPrompts(buttonID){
  if(buttonID == "setSports"){
    setSports();
  } 
  else if(buttonID == "getSports"){
    displaySports();
  }
  else if(buttonID == "setEntertainment"){
    setEntertainment();
  } 
  else if(buttonID == "getEntertainment"){
    displayEntertainment();
  }
  else if(buttonID == "setHealth"){
    setHealth();
  } 
  else if(buttonID == "getHealth"){
    displayHealth();
  }
  else if(buttonID == "setBusiness"){
    setBusiness();
  } 
  else if(buttonID == "getBusiness"){
    displayBusiness();
  }

}


function displaySports(){
  var promptSize = sportsInfo.length;
  var ran = Math.floor(Math.random() * promptSize);

  if(promptSize > 0){
     document.getElementById("sportsLink").href = sportsInfo[ran].link;
     document.getElementById("sportsDisplay").innerHTML = sportsInfo[ran].title;
     document.getElementById("sportsImg").src = sportsInfo[ran].image;
     document.getElementById("sportsImg").style.height = "62vw";
     sportsInfo.splice(ran, 1); 
  }
  else{
    document.getElementById("sportsDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    document.getElementById("sportsImg").src="";
    document.getElementById("getSports").disabled=true;
    document.getElementById("setSports").disabled=false;
  }
}

function setSports(){
  var category = "sports";
  getJson(category, sportsInfo);
  document.getElementById("getSports").disabled=false;
  document.getElementById("setSports").disabled=true;
  document.getElementById("sportsDisplay").innerHTML = "Click button to get a prompt!";
}

function displayEntertainment(){
  var promptSize = entertainmentInfo.length;
  var ran = Math.floor(Math.random() * promptSize);

  if(promptSize > 0){
    document.getElementById("entertainmentLink").href = entertainmentInfo[ran].link;
     document.getElementById("entertainmentDisplay").innerHTML = entertainmentInfo[ran].title;
     document.getElementById("entertainmentImg").src = entertainmentInfo[ran].image;
     document.getElementById("entertainmentImg").style.height = "62vw";
     entertainmentInfo.splice(ran, 1); 
  }
  else{
    document.getElementById("entertainmentDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    document.getElementById("entertainmentImg").src="";
    document.getElementById("getEntertainment").disabled=true;
    document.getElementById("setEntertainment").disabled=false;
  }
}

function setEntertainment(){
  var category = "entertainment";
  getJson(category, entertainmentInfo);
  document.getElementById("getEntertainment").disabled=false;
  document.getElementById("setEntertainment").disabled=true;
  document.getElementById("entertainmentDisplay").innerHTML = "Click button to get a prompt!";
}

function displayHealth(){
  var promptSize = healthInfo.length;
  var ran = Math.floor(Math.random() * promptSize);

  if(promptSize > 0){
    document.getElementById("healthLink").href = healthInfo[ran].link;
     document.getElementById("healthDisplay").innerHTML = healthInfo[ran].title;
     document.getElementById("healthImg").src = healthInfo[ran].image;
     document.getElementById("healthImg").style.height = "62vw";
     healthInfo.splice(ran, 1); 
  }
  else{
    document.getElementById("healthDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    document.getElementById("healthImg").src="";
    document.getElementById("getHealth").disabled=true;
    document.getElementById("setHealth").disabled=false;
  }
}

function setHealth(){
  var category = "health";
  getJson(category, healthInfo);
  document.getElementById("getHealth").disabled=false;
  document.getElementById("setHealth").disabled=true;
  document.getElementById("healthDisplay").innerHTML = "Click button to get a prompt!";
}

function displayBusiness(){
  var promptSize = businessInfo.length;
  var ran = Math.floor(Math.random() * promptSize);

  if(promptSize > 0){
    document.getElementById("businessLink").href = businessInfo[ran].link;
     document.getElementById("businessDisplay").innerHTML = businessInfo[ran].title;
     document.getElementById("businessImg").src = businessInfo[ran].image;
     document.getElementById("businessImg").style.height = "62vw";
     businessInfo.splice(ran, 1); 
  }
  else{
    document.getElementById("businessDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    document.getElementById("businessImg").src="";
    document.getElementById("getBusiness").disabled=true;
    document.getElementById("setBusiness").disabled=false;
  }
}

function setBusiness(){
  var category = "business";
  getJson(category, businessInfo);
  document.getElementById("getBusiness").disabled=false;
  document.getElementById("setBusiness").disabled=true;
  document.getElementById("businessDisplay").innerHTML = "Click button to get a prompt!";
}

var synth = window.speechSynthesis;
function speak(textID){
if(textID == "listenSports"){
  var txt = document.getElementById("sportsDisplay").innerHTML;
}
else if(textID == "listenEntertainment"){
  var txt = document.getElementById("entertainmentDisplay").innerHTML;
}
else if(textID == "listenHealth"){
  var txt = document.getElementById("healthDisplay").innerHTML;
}
else if(textID == "listenBusiness"){
  var txt = document.getElementById("businessDisplay").innerHTML;
}
    if (synth.speaking) {
        console.error('speechSynthesis.speaking');
        return;
    }
    if (txt !== '') {
    var utterThis = new SpeechSynthesisUtterance(txt);
    utterThis.onend = function (event) {
        console.log('SpeechSynthesisUtterance.onend');
    }
    utterThis.onerror = function (event) {
        console.error('SpeechSynthesisUtterance.onerror');
    }
    
    utterThis.pitch = 0.8;
    utterThis.rate = 0.8;
    synth.speak(utterThis);
  }
}

