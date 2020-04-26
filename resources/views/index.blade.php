<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FatigueBan!</title>
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
</head>

<body style="background-color: rgb(42,42,42);">
    @include('header')
    <section class="d-table" id="slides" style="width: 100%;height: auto;margin-top: 5%;background-color: #000000;">
        <div class="carousel slide" data-ride="carousel" data-interval="8000" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption text-left" id="text1">
                            <h3 class="text-nowrap text-left justify-content-xl-start" data-aos="fade-up" style="font-size: 7vw;width: 500px;">Alert Today</h3>
                        </div>
                        <div class="carousel-caption text-right d-xl-flex justify-content-xl-end" id="text2">
                            <h3 class="text-nowrap text-right justify-content-xl-end" data-aos="fade-up" data-aos-delay="300" style="font-size: 7vw;padding-top: 20px;padding-bottom: 20px;">Alive Tomorrow</h3>
                        </div>
                    </div><img class="img-fluid w-100 d-block" src="Images/caleb-george-URmkfvtK3Qw-unsplash.jpg" alt="Slide Image" style="max-height: 600px;"></div>
                <div class="carousel-item">
                    <div class="carousel-caption" id="slide2" style="width: 70%;margin-left: 0px;padding-left: 15%;height: 35%;">
                        <h1 style="font-size: 4vw;width: 130%;margin-left: -25%;">Stay safe by avoiding drowsy driving.&nbsp;</h1><a href="tips.html"><button class="btn btn-primary" type="button" style="font-size: 2vw;margin-top: 0%;background-color: rgb(27,38,50);margin-right: 25%;">Find out more!</button></a></div>
                    <img
                        class="img-fluid w-100 d-block" src="Images/clark-tibbs-oqStl2L5oxI-unsplash.jpg" alt="Slide Image" style="max-height: 600px;"></div>
                <div class="carousel-item">
                    <div class="carousel-caption" style="width: 70%;margin-left: 0px;margin-bottom: 15%;padding-bottom: 0px;padding-left: 15%;height: 50%;">
                        <h1 class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: 10%;margin-top: -10%;padding-bottom: 0px;font-weight: bold;margin-right: 5%;">Stay Alert, Stay Social! <br>Try our Conversation Prompts, and have a different conversation every time!<br><br><a href="prompt.html"><button class="btn btn-primary" type="button" style="font-size: 2vw;">Find out more!</button></a></h1>
                    </div><img class="img-fluid w-100 d-block" src="Images/victor-xok-qd-zd2MoeE8-unsplash.jpg" alt="Slide Image" style="max-height: 600px;"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev" style="width: 15%;"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1"
                    role="button" data-slide="next" style="width: 15%;"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators d-flex">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <section style="background-color: #ffffff;padding-bottom: 40px;height: auto;padding-top: 40px;">
        <div class="container" style="padding: 0px;">
            <div class="row align-items-center">
                <div class="col" style="padding-top: 20px;padding-bottom: 0px;">
                    <div class="text-center" style="background-color: #ffffff;">
                        <h1 style="color: rgb(37,85,90);font-size: 7vw;font-weight: bold;font-style: italic;">FatigueBan! WHY?</h1>
                        <p style="color: rgb(37,85,90);font-size: 4vw;font-style: italic;font-weight: normal;">Check&nbsp; this video out!</p>
                    </div>
                    <section class="text-center" id="video" style="width: auto;height: auto;"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/e4uU47k_UKw" class="video"></iframe></section>
                </div>
            </div>
        </div>
    </section>
    <div class="article-list" style="background-color: rgb(240,249,249);height: auto;">
        <div class="container" style="padding: 20px;padding-bottom: 20px;">
            <div>
                <h1 class="text-center" style="font-size: 7vw;color: rgb(37,85,90);font-weight: bold;font-style: italic;"><strong><em>Explore FatigueBan!</em></strong></h1>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item" style="padding-top: 20px;padding-right: 22px;padding-left: 20px;"><a href="tips"><img class="img-fluid" src="Images/markus-winkler-w8vPcVdSlF8-unsplash.jpg"></a>
                    <h3 class="name" style="font-size: 24px;font-weight: bold;">TIPS &amp; TRICKS<br></h3>
                    <p class="description" style="font-size: 16px;">Fatigue driving is one of the top 5 reasons of accidents in Victoria! Read our tips and tricks to stay attentive and active on roads by avoiding driving while fatigued and drowsy<br><br></p><a class="action" href="tips"><i class="fa fa-arrow-circle-right d-sm-flex" style="font-size: 36px;"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item" style="padding: 20px;padding-top: 20px;"><a href="login"><img class="img-fluid" src="Images/markus-spiske-VO5w2Ida70s-unsplash.jpg"></a>
                    <h3 class="name" style="font-size: 24px;font-weight: bold;">ALERT ME<br></h3>
                    <p class="description" style="font-size: 16px;">Do you think you're alert while driving?<br>&nbsp;Be mindful that while driving you are supposed to be alert ! Driving while tired is risky. Drive safe especially in the accident-prone areas by turning on our Alerts now!<br></p>
                    <a
                        class="action" href="login"><i class="fa fa-arrow-circle-right" style="font-size: 36px;"></i></a>
            </div>
            <div class="col-sm-6 col-md-4 item" style="padding: 20px;padding-top: 20px;"><a href="prompt"><img class="img-fluid" src="Images/volodymyr-hryshchenko-V5vqWC9gyEU-unsplash.jpg"></a>
                <h3 class="name" style="font-size: 24px;font-weight: bold;">CONVERSATION STARTER</h3>
                <p class="description" style="font-size: 16px;">Having an interesting conversation can be one of the most effective ways of staying alert after a long day of work, however sometimes you end up having the same conversation with every passenger, feeling to shy to try bringing up a different
                    topic.</p><a class="action" href="prompt"><i class="fa fa-arrow-circle-right" style="font-size: 36px;"></i></a></div>
        </div>
    </div>
    </div>
    <div class="footer-basic" style="height: 100%;padding: 20px;">
        <footer class="text-center" style="padding-bottom: 0;padding-top: 0;">
            <p class="copyright"><img class="img-fluid" src="Images/AZCEnding-Quest%20Logo%20Clean.png" style="width: 10%;height: 10%;margin-bottom: -5px;">AZCEnding-Quest© 2020</p>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="js/prompt.js"></script>
</body>

</html>