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
    <link rel="icon" href="assets/img/FinalWebLogo.ico" type='image/x-icon'/>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>🌏 Alert the Driver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles.css">

    <script type='text/javascript'>
        <?php
            $js_array_high = json_encode($highSeverity);
            echo "var highSeverity = " . $js_array_high . ";\n";
            ?>
            severity = "<?php echo $severity; ?>";
        console.log(severity);
    </script>
    <style>
        .iframe-container {
            position: relative;
            width: 100%;
            height: 480px;
            padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
        }

        .iframe-container > * {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
<main class="container">
    <div class="row">
        <header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(0,0,0,0.8);padding: 0px 16px;width: 100%;padding-top: 0px;padding-bottom: 0px;">
            <div class="container-fluid"><a class="navbar-brand" href="index" style="font-size: 6vw;font-weight: bold;font-style: italic;padding: 5px;padding-left: 0px;"><img src="assets/img/Final%20Web%20Logo.png" style="height: 10%;width: 20%;">&nbsp;FatigueBan</a><button data-toggle="collapse"
                    class="navbar-toggler text-danger" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-md-flex d-lg-flex justify-content-md-end justify-content-lg-end"
                    id="navcol-1" style="font-size: 3vw;">
                    <ul class="nav navbar-nav d-md-flex d-lg-flex d-xl-flex justify-content-md-end justify-content-lg-end justify-content-xl-end">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="tips">Tips &amp; Tricks</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="login">Alert Me</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="prompt">Conversation starter</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Language&nbsp;</a>
                            <div class="dropdown-menu" role="menu" id="google_translate_element">
                                <div></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en',
                        autoDisplay: false,
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    }, 'google_translate_element');
                    function changeGoogleStyles() {
                        if($('.goog-te-menu-frame').contents().find('.goog-te-menu2').length) {
                            $('.goog-te-menu-frame').contents().find('.goog-te-menu2').css({
                                'max-width':'100%',
                                'overflow-x':'auto',
                                'box-sizing':'border-box',
                                'height':'auto'
                            });
                        } else {
                            setTimeout(changeGoogleStyles, 50);
                        }
                    }
                    changeGoogleStyles();
                }
                var googleTranslateScript = document.createElement('script');
                        googleTranslateScript.type = 'text/javascript';
                        googleTranslateScript.async = true;
                        googleTranslateScript.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
                        ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild(googleTranslateScript);
            </script>
        </nav>
        </header>
    </div>
    <div class="row" style="margin-top: 17%; margin-left: 1%">
        <div style="font-size: 12pt ;font-style: italic">Time driving : <span id="time">00:00:00</span></div>
    </div>
    <div class="row" style="margin-top: 2%">
        <div class="col-12">
            <div id="map" class="iframe-container">
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 3%">
        <div class="col-6 col-lg-9">

            <img height="20" width="20" src="assets/img/closure.png"><i class="i">&nbsp;&nbsp;Road Closure <br>
                <img src="car_crash.png" height="23" width="26"> Accident cluster</i>
        </div>
        <div class="col-2 col-lg-1" style="margin-top: 1%">
            <label class="switch">
                <input id="check" type="checkbox" checked onclick="mute()">
                <span class="slider round"> </span>
            </label>
        </div>
        <div class="col-4 col-lg-2">
                <div id= "mutetext" style="font-size: 10pt; font-style: italic;font-weight: bold; text-align: center; margin-top: 8%">
                     Turn off alerts
                </div>
        </div>
    </div>
    <div class="row" style="margin-top: 3%">
        <div class="col-5">
            <button id = "startdrive" class="btn btn-primary btn-block  btn-success" onclick="startdriving()">Start Driving</button>
        </div>
        <div class="col-7">
        <div class="modal fade" id="timermodal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Break Time!!!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><B>You have been driving since past 2 hours, we highly recommend you to take a break of atleast 15 minutes.</B>
                            <br> Choose below if you want the nearest cafes or parking spot:
                        <ul>
                            <li><a id="cafelink" href="">
                                    Cafe's
                                </a>
                            </li>
                            <li><a id="parkinglink" href="">
                                    Parking Spot's
                                </a></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="snooze()">Snooze</button>
                    </div>
                </div>

            </div>
        </div>


        <button type="button" id = "break" class="btn btn-primary btn-block" onclick= "takingBreak()" data-toggle="modal" data-target="#basicExampleModal">
            Take a break
        </button>
        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Break Time!!!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><B>Make sure you take a break of at least 15 minutes. </b><br> Choose below if you want the nearest cafes
                                or parking spot:
                                <ul>
                                    <li><a id="cafelinkTakeABreak" href="">
                                            Cafe's
                                        </a></li>
                                    <li><a id="parkinglinkTakeABreak" href="">
                                            Parking Spot's
                                        </a></li>
                                </ul>
                            </B>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</main>
<audio id="car_audio" src="car_crash.wav" muted autoplay></audio>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="assets/js/prompt.js"></script>
<script src="assets/js/script.js"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?v=3&key=Your_key&callback=init"></script>
</body>
</html>
