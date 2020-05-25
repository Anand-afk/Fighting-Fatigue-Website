<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FatigueBan</title>
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

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(0,0,0,0.8);padding: 0px 16px;width: 100%;padding-top: 0px;padding-bottom: 0px;">
            <div class="container-fluid"><a class="navbar-brand" href="index" style="font-size: 6vw;font-weight: bold;font-style: italic;padding: 5px;padding-left: 0px;"><img src="assets/img/Final%20Web%20Logo.png" style="height: 10%;width: 20%;">&nbsp;FatigueBan</a><button data-toggle="collapse"
                    class="navbar-toggler text-danger" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-md-flex d-lg-flex justify-content-md-end justify-content-lg-end"
                    id="navcol-1" style="font-size: 3vw;">
                    <ul class="nav navbar-nav d-md-flex d-lg-flex d-xl-flex justify-content-md-end justify-content-lg-end justify-content-xl-end">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="tips">Tips &amp; Tricks</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="login">Alert Me</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="prompt">Conversation starter</a></li>
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
    <section class="text-center" class="" style="padding-top: 10%;background-color: rgba(255,255,255,0.48);height: auto;width: 100%;padding-bottom: 10px;margin-top: 10%;">
        <h1 class="text-center" style="font-size: 6vw;color: rgb(0,0,0);background-color: #e1efed;padding: 10px;width: 80%;margin-right: auto;margin-left: auto;border-radius: 20px;">Conversation Starter</h1>
        <h1 class="text-left" style="font-size: 3vw;width: 100%;height: auto;padding: 20px;padding-right: 60px;padding-left: 60px;">Choose a news topic, and just swipe left or right to see the headlines, if you don&#39;t have time to read the headline?  just press the speaker button at the bottom of the box, and it will be read to you.  Have a new conversation with every passenger,
            get to know current events, and after the trip, if you want to read on, just tap the headline, and go to the news article to read more.  Disclaimer: Please only choose a headline, or read a news article when you are stationary.</h1>
    </section>
    <section class="text-center notranslate" style="padding-bottom: 5px;padding-top: 0px;margin-bottom: 7px;margin-top: -7px;"><button class="btn btn-primary" id="prev" type="button" style="margin-right: 70%;font-size: 3vw;margin-top: 0px;margin-bottom: -15%;background-color: rgb(248,206,140);" onclick="getPrompts(this.id)"><i class="fa fa-arrow-left"></i></button><button class="btn btn-primary"
            id="next" type="button" style="font-size: 3vw;margin-bottom: -15%;background-color: rgba(242,163,10,0.54);" onclick="getPrompts(this.id)"><i class="fa fa-arrow-right"></i></button>
        <h1 class="text-center" id="category" style="font-size: 6vw;color: rgb(0,0,0);background-color: #fff2c2;padding: 10px;width: 60%;margin-right: auto;margin-left: auto;border-radius: 20px;">Sports</h1>
    </section>
    <section class="notranslate" style="width: 100%;height: auto;padding-bottom: 60px;background-color: #fbfcfb;padding-top: 10px;padding-right: 20px;padding-left: 20px;">
        <div class="carousel slide" data-ride="carousel" data-interval="false" id="carousel-1" style="margin-top: 0px;">
            <div class="carousel-inner text-center" role="listbox" style="padding-top: 0px;">
                <div class="carousel-item active" id="Q1" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT1" target="_blank">
                                <h1 id="displayT1" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT1" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT1" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q2" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT2" target="_blank">
                                <h1 id="displayT2" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT2" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT2" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q3" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT3" target="_blank">
                                <h1 id="displayT3" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT3" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT3" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q4" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT4" target="_blank">
                                <h1 id="displayT4" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT4" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT4" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q5" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT5" target="_blank">
                                <h1 id="displayT5" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT5" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT5" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q6" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT6" target="_blank">
                                <h1 id="displayT6" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT6" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT6" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q7" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT7" target="_blank">
                                <h1 id="displayT7" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT7" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT7" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q8" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT8" target="_blank">
                                <h1 id="displayT8" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT8" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT8" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q9" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT9" target="_blank">
                                <h1 id="displayT9" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT9" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT9" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q10" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT10" target="_blank">
                                <h1 id="displayT10" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT10" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT10" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q11" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT11" target="_blank">
                                <h1 id="displayT11" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT11" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT11" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q12" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT12" target="_blank">
                                <h1 id="displayT12" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT12" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT12" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q13" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT13" target="_blank">
                                <h1 id="displayT13" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT13" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT13" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q14" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT14" target="_blank">
                                <h1 id="displayT14" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT14" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT14" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q15" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT15" target="_blank">
                                <h1 id="displayT15" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT15" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT15" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q16" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT16" target="_blank">
                                <h1 id="displayT16" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT16" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT16" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q17" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT17" target="_blank">
                                <h1 id="displayT17" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT17" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT17" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q18" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT18" target="_blank">
                                <h1 id="displayT18" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT18" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT18" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q19" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT19" target="_blank">
                                <h1 id="displayT19" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT19" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT19" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item" id="Q20" style="height: auto;width: 100%;">
                    <div class="container">
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="linkT20" target="_blank">
                                <h1 id="displayT20" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Loading news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="listenT20" type="button" style="/*font-size: 3vw;*/margin-bottom: 2%;margin-left: 10px;background-color: rgb(35,159,144);padding-bottom: 6px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block d-none" id="imgT20" src="assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'assets/img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev" id="prom"><span class="carousel-control-prev-icon" style="background-color: #006540;width: 25px;height: 25px;"></span><span class="sr-only">Previous</span></a>
                <a
                    class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon" style="background-color: #006540;width: 25px;height: 25px;"></span><span class="sr-only">Next</span></a>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
                <li data-target="#carousel-1" data-slide-to="4"></li>
                <li data-target="#carousel-1" data-slide-to="5"></li>
                <li data-target="#carousel-1" data-slide-to="6"></li>
                <li data-target="#carousel-1" data-slide-to="7"></li>
                <li data-target="#carousel-1" data-slide-to="8"></li>
                <li data-target="#carousel-1" data-slide-to="9"></li>
                <li data-target="#carousel-1" data-slide-to="10"></li>
                <li data-target="#carousel-1" data-slide-to="11"></li>
                <li data-target="#carousel-1" data-slide-to="12"></li>
                <li data-target="#carousel-1" data-slide-to="13"></li>
                <li data-target="#carousel-1" data-slide-to="14"></li>
                <li data-target="#carousel-1" data-slide-to="15"></li>
                <li data-target="#carousel-1" data-slide-to="16"></li>
                <li data-target="#carousel-1" data-slide-to="17"></li>
                <li data-target="#carousel-1" data-slide-to="18"></li>
                <li data-target="#carousel-1" data-slide-to="19"></li>
            </ol>
        </div>
        <h6 class="text-right" style="font-size: 8px;">Powered by <a href="terms">News API.</a></h6>
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
    <script src="assets/js/prompt.js"></script>
</body>

</html>
