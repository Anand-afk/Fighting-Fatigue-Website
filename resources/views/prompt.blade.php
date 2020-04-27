<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FatiguingBan!</title>
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
</head>

<body>
<header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(0,0,0,0.8);padding: 0px 16px;width: 100%;padding-top: 0px;padding-bottom: 0px;">
            <div class="container-fluid"><a class="navbar-brand" href="index" style="font-size: 6vw;font-weight: bold;font-style: italic;padding: 5px;padding-left: 0px;"><img src="Images/Final%20Web%20Logo.png" style="height: 10%;width: 20%;">&nbsp;FatigueBan</a>
                <button
                    data-toggle="collapse" class="navbar-toggler text-danger" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse d-md-flex d-lg-flex justify-content-md-end justify-content-lg-end" id="navcol-1" style="font-size: 3vw;">
                        <ul class="nav navbar-nav d-md-flex d-lg-flex d-xl-flex justify-content-md-end justify-content-lg-end justify-content-xl-end">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="index">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="tips">Tips &amp; Tricks</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="login">Alert Me</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="prompt">Conversation starter</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    <section class="text-center" style="padding-top: 10%;background-color: rgba(255,255,255,0.48);height: auto;width: 100%;padding-bottom: 10px;margin-top: 10%;">
        <h1 class="text-center" style="font-size: 6vw;color: rgb(0,0,0);background-color: #e1efed;padding: 10px;width: 80%;margin-right: auto;margin-left: auto;border-radius: 20px;">Topic Generator</h1>
        <h1 style="font-size: 3vw;width: 100%;height: auto;padding: 20px;padding-right: 60px;padding-left: 60px;">Help yourself stay alert through long days, and break up a long day of work, with having a new, interesting conversation with every passenger.&nbsp;</h1>
    </section>
    <section style="width: 100%;height: auto;padding-bottom: 60px;background-color: #fbfcfb;padding-top: 10px;padding-right: 20px;padding-left: 20px;">
        <div class="carousel slide" data-ride="carousel" data-interval="false" id="carousel-1" style="margin-top: 0px;">
            <div class="carousel-inner text-center" role="listbox">
                <div class="carousel-item active" style="height: auto;width: 100%;">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Pop Culture</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding-top: 0px;margin-right: 0px;margin-left: 0px;margin-bottom: 10%;padding-bottom: 0px;">
                            <h1 id="popDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);">Click button to get a prompt!</h1><button class="btn btn-primary border rounded" id="popCulture" type="button" style="/*font-size: 2vw;*/margin-right: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Get Prompt!</button><button class="btn btn-primary border rounded"
                                id="rePopCulture" type="button" style="/*font-size: 2vw;*/margin-left: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Reload It!</button></div>
                    </div><img class="w-100 d-block" src="Images/daniel-cheung-cPF2nlWcMY4-unsplash.jpg" alt="Slide Image"></div>
                <div class="carousel-item">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Film &amp; TV</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;padding: 0px;margin-top: auto;margin-right: 0px;margin-bottom: 10%;margin-left: 0px;">
                            <h1 id="filmTvDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);">Click button to get a prompt!</h1><button class="btn btn-primary border rounded" id="filmTv" type="button" style="/*font-size: 2vw;*/margin-right: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Get Prompt!</button><button class="btn btn-primary border rounded"
                                id="reFilmTv" type="button" style="/*font-size: 2vw;*/margin-left: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Reload It!</button></div>
                    </div><img class="w-100 d-block" src="Images/annie-spratt--lgZua7pnMQ-unsplash.jpg" alt="Slide Image"></div>
                <div class="carousel-item">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Sport</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;margin-top: auto;margin-right: 0px;margin-bottom: 10%;margin-left: 0px;padding: 0px;">
                            <h1 id="sportDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);">Click button to get a prompt!</h1><button class="btn btn-primary border rounded" id="sport" type="button" style="/*font-size: 2vw;*/margin-right: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Get Prompt!</button><button class="btn btn-primary border rounded"
                                id="reSport" type="button" style="/*font-size: 2vw;*/margin-left: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Reload It!</button></div>
                    </div><img class="w-100 d-block" src="Images/tiago-aleixo-ToUPFfxkmw8-unsplash.jpg" alt="Slide Image"></div>
                <div class="carousel-item">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Food</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;margin-right: 0px;margin-bottom: 10%;margin-left: 0px;padding: 0px;">
                            <h1 id="foodDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);height: auto;">Click button to get a prompt!</h1><button class="btn btn-primary border rounded" id="food" type="button" style="/*font-size: 2vw;*/margin-right: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Get Prompt!</button><button class="btn btn-primary border rounded"
                                id="reFood" type="button" style="/*font-size: 2vw;*/margin-left: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Reload It!</button></div>
                    </div><img class="w-100 d-block" src="Images/lukas-blazek-f-TWhXOrLiU-unsplash.jpg" alt="Slide Image"></div>
                <div class="carousel-item">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Music</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;margin-top: auto;margin-right: 0px;margin-bottom: 10%;margin-left: 0px;padding: 0px;">
                            <h1 id="musicDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);">Click button to get a prompt!</h1><button class="btn btn-primary border rounded" id="music" type="button" style="/*font-size: 2vw;*/margin-right: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Get Prompt!</button><button class="btn btn-primary border rounded"
                                id="reMusic" type="button" style="/*font-size: 2vw;*/margin-left: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Reload It!</button></div>
                    </div><img class="w-100 d-block" src="Images/malte-wingen-PDX_a_82obo-unsplash.jpg" alt="Slide Image"></div>
                <div class="carousel-item">
                    <div class="container" style="padding: 3%;">
                        <h1 style="width: 60%;margin-left: auto;margin-right: auto;padding-top: 10px;font-size: 5vw;padding-bottom: 10px;background-color: rgba(255,252,186,0.48);border-radius: 20px;">Travel</h1>
                        <div class="carousel-caption border rounded" style="background-color: rgba(245,218,218,0.7);width: 70%;height: auto;margin-top: auto;margin-right: 0px;margin-bottom: 10%;margin-left: 0px;padding: 0px;">
                            <h1 id="travelDisplay" class="slideText" style="font-size: 4vw;color: rgb(0,0,0);">Click button to get a prompt!</h1><button class="btn btn-primary border rounded" id="travel" type="button" style="/*font-size: 2vw;*/margin-right: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Get Prompt!</button><button class="btn btn-primary border rounded"
                                id="reTravel" type="button" style="/*font-size: 2vw;*/margin-left: 10px;margin-bottom: 1%;" onclick="getPrompts(this.id)">Reload It!</button></div>
                    </div><img class="w-100 d-block" src="Images/frank-vessia-EoThx95bYPg-unsplash.jpg" alt="Slide Image"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev" style="margin-top: 15%;"><span class="carousel-control-prev-icon" style="background-color: #006540;margin-bottom: 560%;width: 25px;height: 25px;"></span><span class="sr-only">Previous</span></a>
                <a
                    class="carousel-control-next" href="#carousel-1" role="button" data-slide="next" style="margin-top: 15%;"><span class="carousel-control-next-icon" style="background-color: #006540;margin-bottom: 560%;width: 25px;height: 25px;"></span><span class="sr-only">Next</span></a>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
                <li data-target="#carousel-1" data-slide-to="4"></li>
                <li data-target="#carousel-1" data-slide-to="5"></li>
            </ol>
        </div>
    </section>
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