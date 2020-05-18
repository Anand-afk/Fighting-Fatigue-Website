<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FatigueBan!</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles1.css">
</head>

<body style="background-color: rgb(0,0,0);">
    <header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(0,0,0,0.8);padding: 0px 16px;width: 100%;padding-top: 0px;padding-bottom: 0px;">
            <div class="container-fluid"><a class="navbar-brand" href="index" style="font-size: 6vw;font-weight: bold;font-style: italic;padding: 5px;padding-left: 0px;"><img src="assets/img/Final%20Web%20Logo.png" style="height: 10%;width: 20%;">&nbsp;FatigueBan</a><button data-toggle="collapse"
                    class="navbar-toggler text-danger" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-md-flex d-lg-flex justify-content-md-end justify-content-lg-end"
                    id="navcol-1" style="font-size: 3vw;">
                    <ul class="nav navbar-nav d-md-flex d-lg-flex d-xl-flex justify-content-md-end justify-content-lg-end justify-content-xl-end">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="index">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="tips">Tips &amp; Tricks</a></li>
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
    <section class="d-table" id="slides" style="width: 100%;height: auto;margin-top: 5%;background-color: #000000;">
        <div class="carousel slide" data-ride="carousel" data-interval="8000" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption text-left" id="text1">
                            <h3 class="text-nowrap text-left justify-content-xl-start" data-aos="fade-up" style="font-size: 7vw;width: 500px;padding-top: 10%;">Alert Today</h3>
                            <h3 class="text-nowrap text-right justify-content-xl-end" data-aos="fade-up" data-aos-delay="300" style="font-size: 7vw;padding-top: 20px;padding-bottom: 15%;">Alive Tomorrow</h3>
                        </div>
                    </div><img class="img-fluid w-100 d-block" src="assets/img/caleb-george-URmkfvtK3Qw-unsplash.jpg" alt="Slide Image" style="max-height: 600px;"></div>
                <div class="carousel-item">
                    <div class="carousel-caption" id="slide3" style="width: 70%;margin-left: 0px;padding-left: 15%;height: 35%;">
                        <h1 class="text-nowrap" style="font-size: 4vw;width: 130%;margin-left: -30%;font-weight: bold;margin-bottom: 4px;margin-top: -15%;height: auto;color: rgb(255,255,255);background-color: rgba(0,0,0,0.44);">&nbsp; &nbsp;Stay safe by avoiding drowsy driving. <br>Read through our tips to be more vigilant.&nbsp;</h1><a href="tips"><button class="btn btn-primary" type="button" style="font-size: 2vw;margin-top: 2%;background-color: rgb(3,19,44);margin-right: 25%;">Find out more!</button></a></div>
                    <img
                        class="img-fluid w-100 d-block" src="assets/img/mikael-kristenson-MYXf7tGEntk-unsplash.jpg" alt="Slide Image" style="max-height: 600px;"></div>
                <div class="carousel-item">
                    <div class="carousel-caption" id="slide2" style="width: 70%;margin-left: 0px;padding-left: 15%;margin-bottom: 0px;padding-top: 100%;">
                        <h1 class="text-nowrap" style="font-size: 4vw;width: 130%;margin-left: -33%;font-weight: bold;margin-top: -70%;">Watch out for the accident-prone areas<br>&nbsp;by turning on our Alerts today!</h1><a href="login"><button class="btn btn-primary" type="button" style="font-size: 2vw;margin-top: 0%;background-color: rgb(27,38,50);margin-right: 25%;">Find out more!</button></a></div>
                    <img
                        class="img-fluid w-100 d-block" src="assets/img/muukii-rtX4wxMEI2M-unsplash.jpg" alt="Slide Image" style="max-height: 600px;"></div>
                <div class="carousel-item">
                    <div class="carousel-caption" style="width: 70%;margin-left: 0px;margin-bottom: 15%;padding-bottom: 0px;padding-left: 15%;height: 50%;">
                        <h1 class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: 10%;margin-top: -10%;padding-bottom: 0px;font-weight: bold;margin-right: 5%;">Stay Alert, Stay Social! <br>Try our Conversation Starter, and have a different conversation every time!<br><br><a href="prompt"><button class="btn btn-primary" type="button" style="font-size: 2vw;">Find out more!</button></a></h1>
                    </div><img class="img-fluid w-100 d-block" src="assets/img/victor-xok-qd-zd2MoeE8-unsplash.jpg" alt="Slide Image" style="max-height: 600px;"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev" style="width: 15%;"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1"
                    role="button" data-slide="next" style="width: 15%;"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators d-none">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
            </ol>
        </div>
    </section>
    <section style="background-color: #ffffff;padding-bottom: 40px;height: auto;padding-top: 40px;">
        <div class="container" style="padding: 0px;">
            <div class="row align-items-center">
                <div class="col" style="padding-top: 0px;padding-bottom: 0px;">
                    <div class="text-center" style="background-color: #ffffff;padding-top: 0px;">
                        <h1 style="color: rgb(37,85,90);font-size: 6vw;font-weight: bold;font-style: italic;">FatigueBan! WHY?</h1>
                        <p style="color: rgb(37,85,90);font-size: 3vw;font-style: italic;font-weight: normal;">Check&nbsp; this video out!</p>
                    </div>
                    <section class="text-center" id="video" style="width: auto;height: auto;padding-top: 0px;"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/e4uU47k_UKw" class="video"></iframe></section>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #f8f8f8;padding-top: 20px;">
        <div>
            <h1 class="text-center" style="font-size: 6vw;color: rgb(37,85,90);font-weight: normal;font-style: italic;padding-top: 0px;"><strong><em>Explore FatigueBan!</em></strong></h1>
        </div>
        <div class="card-group" style="padding: 20px;">
            <div class="card text-center border rounded shadow-lg" style="padding: 20px;margin-right: 5px;margin-left: 5px;"><img class="card-img-top w-100 d-block" src="assets/img/markus-winkler-w8vPcVdSlF8-unsplash.jpg">
                <div class="card-body">
                    <h4 class="card-title"><strong>TIPS &amp; TRICKS</strong></h4>
                    <p class="d-sm-flex card-text">Fatigue driving is one of the top 5 reasons of accidents in Victoria! Read our tips and tricks to stay alert and active on roads by avoiding driving while fatigued and drowsy<br></p><a class="card-link" href="tips"><button class="btn btn-primary" type="button">Learn More</button></a></div>
            </div>
            <div class="card text-center border rounded shadow-lg" style="padding: 20px;margin-right: 5px;margin-left: 5px;"><img class="card-img-top w-100 d-block" src="assets/img/markus-spiske-VO5w2Ida70s-unsplash.jpg">
                <div class="card-body">
                    <h4 class="card-title"><strong>ALERT ME</strong></h4>
                    <p class="card-text">Do you think you're alert while driving?<br>&nbsp;Be mindful that while driving you are supposed to be alert ! Driving while tired is risky. Drive safe especially in the accident-prone areas by turning on our Alerts now!</p><a class="card-link"
                        href="login"><button class="btn btn-primary" type="button">Learn More</button></a></div>
            </div>
            <div class="card text-center border rounded shadow-lg" style="padding: 20px;margin-left: 5px;margin-right: 5px;"><img class="card-img-top w-100 d-block" src="assets/img/volodymyr-hryshchenko-V5vqWC9gyEU-unsplash.jpg">
                <div class="card-body">
                    <h4 class="card-title"><strong>CONVERSATION STARTER</strong></h4>
                    <p class="card-text">Having an interesting conversation can be one of the most effective ways of staying alert after a long day of work, however sometimes you end up having the same conversation with every passenger, feeling to shy to try bringing up a
                        different topic.</p><a class="card-link" href="prompt"><button class="btn btn-primary" type="button">Learn More</button></a></div>
            </div>
        </div>
    </section>
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
    
</body>

</html>