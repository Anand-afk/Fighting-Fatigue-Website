<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FatigueBan_TEST</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles1.css">
    <link rel="icon" href="assets/img/FinalWebLogo.ico" type='image/x-icon'/>
</head>

<body style="background-color: rgb(255,255,255);">
    <header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(0,0,0,0.8);padding: 0px 16px;width: 100%;padding-top: 0px;padding-bottom: 0px;">
            <div class="container-fluid"><a class="navbar-brand" href="index" style="font-size: 6vw;font-weight: bold;font-style: italic;padding: 5px;padding-left: 0px;"><img src="assets/img/Final%20Web%20Logo.png" style="height: 10%;width: 20%;">&nbsp;FatigueBan</a><button data-toggle="collapse"
                    class="navbar-toggler text-danger" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-md-flex d-lg-flex justify-content-md-end justify-content-lg-end"
                    id="navcol-1" style="font-size: 3vw;">
                    <ul class="nav navbar-nav d-md-flex d-lg-flex d-xl-flex justify-content-md-end justify-content-lg-end justify-content-xl-end">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="tips">Tips &amp; Tricks</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="login">Alert Me</a></li>
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
                        pageLanguage: 'es',
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
                    $('.navbar-nav li div a').on('click', function(){
                          if(!$( this ).hasClass('dropdown-toggle')){
                              $('.navbar-collapse').collapse('hide');
                          }
                        }
                    );
                }
                var googleTranslateScript = document.createElement('script');
                        googleTranslateScript.type = 'text/javascript';
                        googleTranslateScript.async = true;
                        googleTranslateScript.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
                        ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild(googleTranslateScript);
            </script>
        </nav>
    </header>
    <section class="text-center" style="background-color: #ffffff;padding-top: 10%;margin-top: 10%;">
        <h1 class="text-center" style="font-size: 6vw;color: rgb(0,0,0);background-color: #e1efed;padding: 10px;width: 80%;margin-right: auto;margin-left: auto;border-radius: 20px;">Tips &amp; Tricks</h1>
        <h1 style="font-size: 3vw;width: 100%;height: auto;padding: 20px;padding-left: 60px;padding-right: 60px;">Many times, people are unaware of what’s making them tired. Don’t let fatigue keep you from doing your work. Try our simple tips and stay active and alert throughout the day especially while driving!</h1>
        <div class="container" style="padding: 0px;padding-top: 0px;margin-top: 0%;">
            <h1 class="text-center" style="padding: 20px;font-size: 6vw;font-weight: bold;color: rgb(4,54,9);border-radius: 20px;background-color: #fff9e2;width: 70%;margin-right: auto;margin-left: auto;"><strong><em>Signs of fatigue</em></strong></h1>
            <p style="font-size: 3vw;">You are tired! <br>Be more careful when the following signs happened!</p>
            <div class="table-responsive border-white d-flex">
                <table class="table">
                    <tbody class="text-center border-primary">
                        <tr class="text-center" style="height: auto;">
                            <td class="border-white" style="padding-top: 20px;width: 230px;padding-bottom: 0px;height: auto;"><img class="img-fluid" data-bs-hover-animate="pulse" src="assets/img/yawn.png" width="50px" height="50px" style="width: 50%;">
                                <h1 style="font-size: 3vw;margin-bottom: 0px;margin-top: 20%;">Yawning</h1><br><br></td>
                            <td class="border-white" style="padding-top: 20px;width: 230px;height: auto;"><img class="img-fluid" data-bs-hover-animate="jello" src="assets/img/speed.png" width="50px" height="50px" style="width: 50%;">
                                <h1 style="font-size: 3vw;margin-bottom: 0px;margin-top: 20%;">Inragular speed</h1><br><br></td>
                            <td class="border-white" style="padding-top: 20px;width: 230px;height: auto;padding-bottom: 0px;"><img class="img-fluid" data-bs-hover-animate="shake" src="assets/img/road.png" width="50px" height="50px" style="width: 50%;">
                                <h1 style="font-size: 3vw;margin-bottom: 0px;margin-top: 20%;">Not keeping to your lane</h1><br><br></td>
                            <td class="border-white" style="padding-top: 20px;width: 230px;height: auto;padding-bottom: 0px;"><img class="img-fluid" data-bs-hover-animate="flash" src="assets/img/sid-view.png" width="50px" height="50px" style="width: 50%;">
                                <h1 style="font-size: 3vw;margin-bottom: 0px;margin-top: 20%;">Difficulty keeping your eyes open</h1><br><br></td>
                        </tr>
                        <tr class="text-center" style="height: auto;">
                            <td class="border-white" style="width: 230px;height: auto;padding-top: 0px;"><img class="img-fluid" data-bs-hover-animate="swing" src="assets/img/glasses.png" width="50px" height="50px" style="width: 50%;">
                                <h1 style="font-size: 3vw;margin-bottom: 0px;margin-top: 20%;">Blurred vision</h1><br><br></td>
                            <td class="border-white" style="padding-top: 0px;width: 230px;height: auto;padding-bottom: 0px;"><img class="img-fluid" data-bs-hover-animate="tada" src="assets/img/slow.png" width="50px" height="50px" style="width: 50%;">
                                <h1 style="font-size: 3vw;margin-bottom: 0px;margin-top: 20%;">Slowed resopnse time</h1><br><br></td>
                            <td class="border-white" style="padding-top: 0px;width: 230px;height: auto;padding-bottom: 0px;"><img class="img-fluid" data-bs-hover-animate="bounce" src="assets/img/icons8-nod-100.png" width="50px" height="50px" style="width: 50%;">
                                <h1 style="font-size: 3vw;margin-bottom: 0px;margin-top: 20%;">Head nodding</h1><br><br></td>
                            <td class="border-white" style="padding-top: 0px;width: 230px;height: auto;padding-bottom: 0px;"><img class="img-fluid" data-bs-hover-animate="wobble" src="assets/img/car-accident.png" width="50px" height="50px" style="width: 50%;">
                                <h1 style="font-size: 3vw;margin-top: 20%;">Increase in number of mistakes made</h1><br><br></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div style="margin-top: -5%;">
        <h1 class="text-center" style="font-size: 6vw;color: rgb(4,54,9);font-weight: bold;font-style: italic;border-radius: 20px;background-color: #fff9e3;width: 70%;margin-right: auto;margin-left: auto;padding: 20px;padding-top: 20px;"><strong><em>Beat driver fatigue</em></strong><br></h1>
        <p class="text-center" style="font-size: 3vw;padding-top: 0px;">Feel fatigued all the time?<br>Following our tips to beat fatigue! Give it a try!</p>
    </div>
    <div class="article-list" style="background-color: rgb(255,255,255);height: auto;">
        <div class="container" style="padding: 20px;padding-bottom: 0px;padding-top: 0px;">
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item" style="padding-top: 20px;"><a><img class="img-fluid" src="assets/img/bastien-jaillot-eJwSOguD1rE-unsplash.jpg" style="padding: 20px;padding-top: 0px;"></a>
                    <h3 class="name" style="font-size: 24px;">Get a good night sleep<br></h3>
                    <p class="description" style="padding: 20px;padding-top: 0px;padding-bottom: 0px;">It is always a good idea to be more careful about having a good night sleep whenever you know that you will have to work overtime as a ridesharing driver or if you plan to be on road for longer hours.<br></p><a class="action" href="tips"></a></div>
                <div
                    class="col-sm-6 col-md-4 item" style="padding-top: 20px;"><a><img class="img-fluid" src="assets/img/mike-kenneally-tNALoIZhqVM-unsplash.jpg" style="padding: 20px;padding-top: 0px;"></a>
                    <h3 class="name" style="font-size: 24px;">Don't rely on caffeine to keep you alert<br></h3>
                    <p class="description" style="padding: 20px;padding-top: 0px;padding-bottom: 0px;">You may want to have more coffee when you begin to feel drowsy, but this is not a wise choice. Although caffeine provides a temporary spike in energy, it actually reduces your energy level. Therefore, short breaks too are very important.<br></p>
                    <a
                        class="action" href="alert"></a>
            </div>
            <div class="col-sm-6 col-md-4 item" style="padding-top: 20px;"><a><img class="img-fluid" src="assets/img/tim-bish-WbC9XIlQb4k-unsplash.jpg" style="padding: 20px;padding-top: 0px;"></a>
                <h3 class="name" style="font-size: 24px;">Listen to your body</h3>
                <p class="description" style="padding: 20px;padding-top: 0px;padding-bottom: 0px;">If your mind and body are telling you it is time for a rest, then pull over immediately. Don't try and fight through it just to cut a few minutes off of your trip or because the children are sleeping. Turning up the music or opening the
                    window is not an effective strategy to keep you alert. Don't risk falling asleep behind the wheel.</p><a class="action" href="prompt"></a></div>
            <div class="col-sm-6 col-md-4 item" style="padding-top: 20px;"><a><img class="img-fluid" src="assets/img/brooke-lark-nTZOILVZuOg-unsplash.jpg" style="padding: 20px;padding-top: 0px;"></a>
                <h3 class="name" style="font-size: 24px;">Eat healthy and often</h3>
                <p class="description" style="padding: 20px;padding-top: 0px;padding-bottom: 0px;">Although it is tempting to make a quick stop for fast food while on the road, a heavy burger and greasy fries will quickly make you feel tired and lethargic. Healthy snacks<br>every few hours will give you more energy and help keep you
                    alert longer.</p>
            </div>
            <div class="col-sm-6 col-md-4 item" style="padding-top: 20px;"><a><img class="img-fluid" src="assets/img/lechon-kirb-5tniytQs68E-unsplash.jpg" style="padding: 20px;padding-top: 0px;"></a>
                <h3 class="name" style="font-size: 24px;">Stop for breaks even if you are not tired</h3>
                <p class="description" style="padding: 20px;padding-top: 0px;padding-bottom: 0px;">Drivers should take a break before they feel tired. Every few hours plan a short break to stretch your legs and get some fresh air. Driving for an extended period of time without breaking is dangerous for everyone in your car and surrounding
                    cars.</p><a class="action" href="prompt"></a></div>
            <div class="col-sm-6 col-md-4 item" style="padding-top: 20px;"><a><img class="img-fluid" src="assets/img/pablo-merchan-montes-wYOPqmtDD0w-unsplash.jpg" style="padding: 20px;padding-top: 0px;"></a>
                <h3 class="name" style="font-size: 24px;">Go home before opening rideshare apps</h3>
                <p class="description" style="padding: 20px;padding-top: 0px;padding-bottom: 0px;">It is always a good idea to go home in between your day job and driving for ridesharing apps. Going home allows you to ease your mind by having a proper meal, meeting family/ roommates, shower, watching TV, or just by taking a quick 15-30
                    minutes nap before hitting the road again.</p><a class="action" href="prompt"></a></div>
        </div>
    </div>
    </div>
    <div class="footer-basic" style="height: 100%;padding: 20px;">
        <footer class="text-center" style="padding-bottom: 0;padding-top: 0;">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="about" style="color: rgb(170,170,170);font-size: 16px;">About Us</a></li>
                <li class="list-inline-item"><a href="terms" style="color: rgb(170,170,170);font-size: 16px;">Terms of Service&nbsp;</a></li>
            </ul>
            <p class="copyright" style="margin-top: 0px;"><br><img class="img-fluid" src="assets/img/AZCEnding-Quest%20Logo%20Clean.png" style="width: 10%;height: 10%;margin-bottom: -5px;">AZCEnding-Quest© 2020<br></p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
{{--    <script src="assets/js/prompt.js"></script>--}}
    <script src="assets/js/survey.js"></script>
</body>

</html>
