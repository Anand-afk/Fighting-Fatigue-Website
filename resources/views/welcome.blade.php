<!doctype html>
<html lang="en">
  <head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/css/Article-List.css">
    <link rel="stylesheet" href="/css/Footer-Basic.css">
    <link rel="stylesheet" href="/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="/css/styles1.css">
    <link rel="stylesheet" href="/css/styles.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name = "csrf-token" content = "{{csrf_token()}}">

    <title>🌏 Alert the Driver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles.css"> 

    <script type='text/javascript'>
      <?php
      $js_array_high = json_encode($highSeverity);
      echo "var highSeverity = ". $js_array_high . ";\n";
      ?>
    
    </script>
  </head>
  <body>
   <main class="container">
   <header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(0,0,0,0.8);padding: 0px 16px;width: 100%;padding-top: 0px;padding-bottom: 0px;">
            <div class="container-fluid"><a class="navbar-brand" href="index" style="font-size: 6vw;font-weight: bold;font-style: italic;padding: 5px;padding-left: 0px;"><img src="Images/Final%20Web%20Logo.png" style="height: 10%;width: 20%;">&nbsp;FatigueBan</a>
                <button
                    data-toggle="collapse" class="navbar-toggler text-danger" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse d-md-flex d-lg-flex justify-content-md-end justify-content-lg-end" id="navcol-1" style="font-size: 3vw;">
                        <ul class="nav navbar-nav d-md-flex d-lg-flex d-xl-flex justify-content-md-end justify-content-lg-end justify-content-xl-end">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="index">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="tips">Tips &amp; Tricks</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="login">Alert Me</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="prompt">Conversation starter</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </header>
      <div id="map" class="map">
      </div>
      <br>
      <h4> Turn On/Off the alerts</h4>
      <label class="switch">
        <input id="check" type="checkbox" onclick = "validate()"> 
        <span class="slider round"> </span>
        
      </label>
    </main>
    <audio id="car_audio" src="car_crash.wav" muted autoplay></audio>
 

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="js/prompt.js"></script>
    <script src="js/script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1PK6pfLyjI_61ODDmiuRdqMPBvNxS5bQ&callback=init"></script>
  </body>
</html>