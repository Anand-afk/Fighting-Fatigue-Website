<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FatigueBan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/Article-List.css">
    <link rel="stylesheet" href="css/Footer-Basic.css">
    <link rel="stylesheet" href="css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="css/Login-Form-Dark.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(0,0,0,0.8);padding: 0px 16px;width: 100%;padding-top: 0px;padding-bottom: 0px;">
            <div class="container-fluid"><a class="navbar-brand" href="index.html" style="font-size: 6vw;font-weight: bold;font-style: italic;padding: 5px;padding-left: 0px;"><img src="img/Final%20Web%20Logo.png" style="height: 10%;width: 20%;">&nbsp;FatigueBan</a><button data-toggle="collapse"
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
                  new google.translate.TranslateElement({pageLanguage: 'en',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    gaTrack: true, gaId: 'UA-37652767-1'}, 'google_translate_element');
                }

                var googleTranslateScript = document.createElement('script');
                googleTranslateScript.type = 'text/javascript';
                googleTranslateScript.async = true;
                googleTranslateScript.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
                ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild(googleTranslateScript);
              </script>
        </nav>
    </header>
    <section class="text-center" style="padding-top: 10%;background-color: rgba(255,255,255,0.48);height: auto;width: 100%;padding-bottom: 10px;margin-top: 10%;">
        <h1 class="text-center" style="font-size: 6vw;color: rgb(0,0,0);background-color: #e1efed;padding: 10px;width: 80%;margin-right: auto;margin-left: auto;border-radius: 20px;">Conversation Starter</h1>
        <h1 style="font-size: 3vw;width: 100%;height: auto;padding: 20px;padding-right: 60px;padding-left: 60px;">Help yourself stay alert through long days, and break up a long day of work, with having a new, interesting conversation with every passenger.&nbsp;</h1>
    </section>
    <section style="width: 100%;height: auto;padding-bottom: 60px;background-color: #fbfcfb;padding-top: 10px;padding-right: 20px;padding-left: 20px;">
        <div class="carousel slide" data-ride="carousel" data-interval="false" id="carousel-1" style="margin-top: 0px;">
            <div class="carousel-inner text-center" role="listbox" style="padding-top: 0px;">
                <div class="carousel-item active" style="height: auto;width: 100%;">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Sports</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <a id="sportsLink" target="_blank">
                                <h1 id="sportsDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-bottom: -10px;margin-top: 5%;">Click the button to load news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="setSports" type="button" style="/*font-size: 2vw;*/margin-bottom: 1%;padding-right: 12px;margin-right: 5%;" onclick="getPrompts(this.id)">Load titles!</button><button class="btn btn-primary border rounded"
                                id="getSports" type="button" style="/*font-size: 2vw;*/margin-right: 5%;margin-bottom: 1%;" onclick="getPrompts(this.id)" disabled="">Get a title!</button><button class="btn btn-primary border rounded" id="listenSports" type="button" style="/*font-size: 2vw;*/margin-bottom: 1%;margin-left: 10px;background-color: rgb(35,159,144);"
                                onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="w-100 d-block" id="sportsImg" src="img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image" onerror="this.src = 'img/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg'"></div>
                <div class="carousel-item">
                    <div class="container" style="padding: 3%;margin-top: 0%;margin-bottom: 0%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Entertainment</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding: 0px;margin-top: auto;margin-right: 0px;margin-bottom: 10%;margin-left: 0px;">
                            <a id="entertainmentLink" target="_blank">
                                <h1 id="entertainmentDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-top: 5%;margin-bottom: -10px;">Click the button to load news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="setEntertainment" type="button" style="/*font-size: 2vw;*/margin-bottom: 1%;margin-right: 5%;" onclick="getPrompts(this.id)">Load titles!</button><button class="btn btn-primary border rounded"
                                id="getEntertainment" type="button" style="/*font-size: 2vw;*/margin-right: 5%;margin-bottom: 1%;" onclick="getPrompts(this.id)" disabled="">Get a title!</button><button class="btn btn-primary border rounded" id="listenEntertainment" type="button"
                                style="/*font-size: 2vw;*/margin-bottom: 1%;background-color: rgb(35,159,144);margin-left: 10px;" onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="img-fluid w-100 d-block" id="entertainmentImg" src="img/annie-spratt--lgZua7pnMQ-unsplash.jpg" alt="Slide Image" style="width: 100%;height: auto;" onerror="this.src = 'img/annie-spratt--lgZua7pnMQ-unsplash.jpg'"></div>
                <div class="carousel-item">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Health</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;margin-top: auto;margin-right: 0px;margin-bottom: 10%;margin-left: 0px;padding: 0px;">
                            <a id="healthLink" target="_blank">
                                <h1 id="healthDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);margin-top: 5%;margin-bottom: -10px;">Click the button to load news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="setHealth" type="button" style="/*font-size: 2vw;*/margin-bottom: 1%;margin-right: 5%;" onclick="getPrompts(this.id)">Load titles!</button><button class="btn btn-primary border rounded" id="getHealth"
                                type="button" style="/*font-size: 2vw;*/margin-right: 5%;margin-bottom: 1%;" onclick="getPrompts(this.id)" disabled="">Get a title!</button><button class="btn btn-primary border rounded" id="listenHealth" type="button" style="/*font-size: 2vw;*/margin-bottom: 1%;background-color: rgb(35,159,144);margin-left: 10px;"
                                onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="img-fluid w-100 d-block" id="healthImg" src="img/brooke-lark-nTZOILVZuOg-unsplash.jpg" alt="Slide Image" onerror="this.src = 'img/brooke-lark-nTZOILVZuOg-unsplash.jpg'"></div>
                <div class="carousel-item">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;"><strong>Business</strong></h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;margin-right: 0px;margin-bottom: 10%;margin-left: 0px;padding: 0px;">
                            <a id="businessLink" target="_blank">
                                <h1 id="businessDisplay" class="slideText" style="color: rgb(0,0,0);height: auto;font-size: 4vw;margin-top: 5%;margin-bottom: -10px;">Click the button to load news titles!</h1>
                            </a><button class="btn btn-primary border rounded" id="setBusiness" type="button" style="/*font-size: 2vw;*/margin-bottom: 1%;margin-right: 5%;" onclick="getPrompts(this.id)">Load titles!</button><button class="btn btn-primary border rounded"
                                id="getBusiness" type="button" style="/*font-size: 2vw;*/margin-right: 5%;margin-bottom: 1%;" onclick="getPrompts(this.id)" disabled="">Get a title!</button><button class="btn btn-primary border rounded" id="listenBusiness" type="button" style="/*font-size: 2vw;*/margin-bottom: 1%;background-color: rgb(35,159,144);margin-left: 10px;"
                                onclick="speak(this.id)"><i class="fa fa-volume-up"></i></button></div>
                    </div><img class="img-fluid w-100 d-block" id="businessImg" src="img/absolutvision-WYd_PkCa1BY-unsplash.jpg" alt="Slide Image" onerror="this.src = 'img/absolutvision-WYd_PkCa1BY-unsplash.jpg'"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev" id="prom" style="margin-top: 15%;"><span class="carousel-control-prev-icon" style="background-color: #006540;margin-bottom: 560%;width: 25px;height: 25px;"></span><span class="sr-only">Previous</span></a>
                <a
                    class="carousel-control-next" href="#carousel-1" role="button" data-slide="next" style="margin-top: 15%;"><span class="carousel-control-next-icon" style="background-color: #006540;margin-bottom: 560%;width: 25px;height: 25px;"></span><span class="sr-only">Next</span></a>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
            </ol>
        </div>
    </section>
    <div class="footer-basic" style="height: 100%;padding: 20px;">
        <footer class="text-center" style="padding-bottom: 0;padding-top: 0;">
            <p class="copyright"><img class="img-fluid" src="img/AZCEnding-Quest%20Logo%20Clean.png" style="width: 10%;height: 10%;margin-bottom: -5px;">AZCEnding-Quest© 2020</p>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="js/prompt.js"></script>
    <script src="js/survey.js"></script>
</body>

</html>
