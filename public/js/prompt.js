var popPrompts = ["What are your top 3 Favorite Movies?", "What is the scariest movie you've ever seen?",
                  "Top 5 Favorite Bands/Artists", "What TV Shows are currently on your must watch list?", 
                  "What was the best toy of the 90s?", "What's your most used emoji?", "What song do you know every single word to, off by heart?",
                  "Who's you favorite Movie Villian", "What’s your funniest YouTube video?", "What's your favorite Christmas Movie?",
                  "What movie does everyone seem to love, that you just don't?", "Who's your favorite celebrity, and why?",
                  "What superpower would you choose, and why?", "If you had intro music, what would it be, and why?", 
                  "What movie do you think everyone must watch?", "Who's the best movie hero?", "Who's your favorite Disney Princess?", 
                  "Which fictional character would you most want to be?"];

var filmTvPrompts = ["What are your top 3 Favorite Movies?", "What is the scariest movie you've ever seen?", 
                     "Who's you favorite Movie Villian", "What's your favorite Christmas Movie?", 
                     "What movie does everyone seem to love, that you just don't?", "What movie do you think everyone must watch?",
                     "What was the funniest movie you've ever seen?", "Are there any TV Shows or Movies you can quote in your sleep?",
                     "Who's the best movie hero?", "Who's your favorite Disney Princess?", "Which fictional character would you most want to be?",
                     "What TV Shows are currently on your must watch list?"];

var sportPrompts = ["What AFL Team do you support?", "What is your favorite Olympic Game Sport?",
                    "What is your favorite sport to watch, and why?", "What sports can you not stand to see on TV?"];

var foodPrompts = ["What is your favorite doghnut?", "What is your favorite kind of cereal?", 
                   "What one thing annoys you most at a restaurant?", "What's the most bizaar thing you have ever eaten?", 
                   "What food do you avoid at all cost?", "What is your favorite comfort food, and why?", "What is your favorite comfort food, and why?"];
                   
var musicPrompts = ["Who are your top 3 Favorite Musicians?", "Top 5 Favorite Bands/Artists",
                    "What song do you know every single word to, off by heart?", "If you had intro music, what would it be, and why?"];

var travelPrompts = ["If you could go anywhere in the world, where would it be?", "What is the most beautiful place you have, or want to travel to?",
                     "What is the best museum you have ever gone to?"];

function getPrompts(buttonID){

  if(buttonID == "popCulture"){
    var result = [ ];
    var promptSize = popPrompts.length;
    var resultSize = result.length;
    var ran = Math.floor(Math.random() * promptSize);
    result.push(popPrompts[ran]);

    if(resultSize < promptSize){
      popPrompts.splice(ran, 1);  
       document.getElementById("popDisplay").innerHTML = result.pop();
    }
    else{
      document.getElementById("popDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    }
  }
  else if(buttonID == "filmTv"){
    var result = [ ];
    var promptSize = filmTvPrompts.length;
    var resultSize = result.length;
    var ran = Math.floor(Math.random() * promptSize);
    result.push(filmTvPrompts[ran]);

    if(resultSize < promptSize){
      filmTvPrompts.splice(ran, 1);  
       document.getElementById("filmTvDisplay").innerHTML = result.pop();
    }
    else{
      document.getElementById("filmTvDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    }
  }
  else if(buttonID == "sport"){
    var result = [ ];
    var promptSize = sportPrompts.length;
    var resultSize = result.length;
    var ran = Math.floor(Math.random() * promptSize);
    result.push(sportPrompts[ran]);

    if(resultSize < promptSize){
      sportPrompts.splice(ran, 1);  
       document.getElementById("sportDisplay").innerHTML = result.pop();
    }
    else{
      document.getElementById("sportDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    }
  }
  else if(buttonID == "food"){
    var result = [ ];
    var promptSize = foodPrompts.length;
    var resultSize = result.length;
    var ran = Math.floor(Math.random() * promptSize);
    result.push(foodPrompts[ran]);

    if(resultSize < promptSize){
      foodPrompts.splice(ran, 1);  
       document.getElementById("foodDisplay").innerHTML = result.pop();
    }
    else{
      document.getElementById("foodDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    }
  }
  else if(buttonID == "music"){
    var result = [ ];
    var promptSize = musicPrompts.length;
    var resultSize = result.length;
    var ran = Math.floor(Math.random() * promptSize);
    result.push(musicPrompts[ran]);

    if(resultSize < promptSize){
      musicPrompts.splice(ran, 1);  
       document.getElementById("musicDisplay").innerHTML = result.pop();
    }
    else{
      document.getElementById("musicDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    }
  }
  else if(buttonID == "travel"){
    var result = [ ];
    var promptSize = travelPrompts.length;
    var resultSize = result.length;
    var ran = Math.floor(Math.random() * promptSize);
    result.push(travelPrompts[ran]);

    if(resultSize < promptSize){
      travelPrompts.splice(ran, 1);  
       document.getElementById("travelDisplay").innerHTML = result.pop();  
    }
    else{
      document.getElementById("travelDisplay").innerHTML = "That’s it! Click below to load a new set, or try another category!";
    }
  }
 else if(buttonID =="rePopCulture"){
    popPrompts = ["What are your top 3 Favorite Movies?", "What is the scariest movie you've ever seen?",
                  "Top 5 Favorite Bands/Artists", "What TV Shows are currently on your must watch list?", 
                  "What was the best toy of the 90s?", "What's your most used emoji?", "What song do you know every single word to, off by heart?",
                  "Who's you favorite Movie Villian", "What’s your funniest YouTube video?", "What's your favorite Christmas Movie?",
                  "What movie does everyone seem to love, that you just don't?", "Who's your favorite celebrity, and why?",
                  "What superpower would you choose, and why?", "If you had intro music, what would it be, and why?", 
                  "What movie do you think everyone must watch?", "Who's the best movie hero?", "Who's your favorite Disney Princess?", 
                  "Which fictional character would you most want to be?"];
      document.getElementById("popDisplay").innerHTML = "Click button to get a prompt!";
  }
  else if(buttonID =="reFilmTv"){
    filmTvPrompts = ["What are your top 3 Favorite Movies?", "What is the scariest movie you've ever seen?", 
                     "Who's you favorite Movie Villian", "What's your favorite Christmas Movie?", 
                     "What movie does everyone seem to love, that you just don't?", "What movie do you think everyone must watch?",
                     "What was the funniest movie you've ever seen?", "Are there any TV Shows or Movies you can quote in your sleep?",
                     "Who's the best movie hero?", "Who's your favorite Disney Princess?", "Which fictional character would you most want to be?",
                     "What TV Shows are currently on your must watch list?"];
      document.getElementById("filmTvDisplay").innerHTML = "Click button to get a prompt!";
  }
  else if(buttonID =="reSport"){
    sportPrompts = ["What AFL Team do you support?", "What is your favorite Summer/Winter Olympic Game Sport?",
                    "What is your favorite sport to watch, and why?", "What sports can you not stand to see on TV?"];
      document.getElementById("sportDisplay").innerHTML = "Click button to get a prompt!";
  }
  else if(buttonID =="reFood"){
    foodPrompts = ["What is your favorite doghnut?", "What is your favorite kind of cereal?", 
                   "What one thing annoys you most at a restaurant?", "What's the most bizaar thing you have ever eaten?", 
                   "What food do you avoid at all cost?", "What is your favorite comfort food, and why?", "What is your favorite comfort food, and why?"];
      document.getElementById("foodDisplay").innerHTML = "Click button to get a prompt!";
  }
  else if(buttonID =="reMusic"){
    musicPrompts = ["Who are your top 3 Favorite Musicians?", "Top 5 Favorite Bands/Artists",
                    "What song do you know every single word to, off by heart?", "If you had intro music, what would it be, and why?"];
      document.getElementById("musicDisplay").innerHTML = "Click button to get a prompt!";
  }
  else if(buttonID =="reTravel"){
    travelPrompts = ["If you could go anywhere in the world, where would it be?", "What is the most beautiful place you have, or want to travel to?",
                     "What is the best museum you have ever gone to?"];
      document.getElementById("travelDisplay").innerHTML = "Click button to get a prompt!";
  }
}
