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
    <link rel="stylesheet" href="/css/styles (2).css">
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
    @include('header')
      <div id="map" class="map">
      </div>
      <p id="info" class="info"></p> 
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