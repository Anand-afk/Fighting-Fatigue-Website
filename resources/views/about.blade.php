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
    <section class="text-center" style="padding-top: 10%;background-color: rgba(255,255,255,0.48);height: auto;width: 100%;padding-bottom: 10px;margin-top: 10%;">
        <h1 class="text-center" style="font-size: 6vw;color: rgb(0,0,0);background-color: #e1efed;padding: 10px;width: 80%;margin-right: auto;margin-left: auto;border-radius: 20px;">About Us</h1><img class="img-fluid" src="assets/img/Team%20Role%20Graphic.png" width="80%" style="padding-top: 20px;">
        <h1 class="text-left" style="font-size: 3vw;width: 80%;height: auto;padding: 20px;margin-right: auto;margin-left: auto;">AZCEnding_Quest (AZCE_Q) was established in March 2020 with the aim of helping Victoria keep its road safer by reducing the numbers of accidents by one of the top five causes: fatigue. Fatigue and drowsiness are the major risks of road injuries in the
            ride-sharing industry over Australia since the drivers work double shifts and use multiple ride-sharingplatforms simultaneously, which adds up to their working hours. <br /><br />As AZCEnding_Quest our dedicated team is working on developing a solution
            for social good that will have different features, all motivating drivers not to drive when fatigued and drowsy. We believe with some effort and dedication we will be able to put forward an effective and efficient solution that will reduce the number
            of car accidents in Victoria and hence reducing transport injuries.</h1>
    </section>
    <div class="footer-basic" style="height: 100%;padding: 20px;">
        <footer class="text-center" style="padding-bottom: 0;padding-top: 0;">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="about" style="color: rgb(170,170,170);font-size: 16px;">About Us</a></li>
                <li class="list-inline-item"><a href="terms" style="color: rgb(170,170,170);font-size: 16px;">Terms of Service&nbsp;</a></li>
            </ul>
            <p class="copyright" style="margin-top: 0px;font-size: 13px;"><br><img class="img-fluid" src="assets/img/AZCEnding-Quest%20Logo%20Clean.png" style="width: 10%;height: 10%;margin-bottom: -5px;">AZCEnding-Quest© 2020<br></p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>