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
    <link rel="icon" href="assets/img/Final%20Web%20Logo.ico" type='image/x-icon'/>
</head>

<body style="background-color: #363232;">
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
    <div class="login-dark" style="background-position: center;background-size: cover;background-repeat: repeat;height: 900px;background-image: url(&quot;assets/img/luke-stackpoole-ZRsJmpt9pNI-unsplash.jpg&quot;);max-height: 900px;">
        <section class="text-center" style="margin-top: 11%;margin-bottom: 0px;padding-bottom: 0px;">
            <h1 style="font-size: 6vw;font-weight: bold;color: rgb(255,255,255);">Alert Me</h1>
            <p style="font-size: 3vw;color: rgb(255,255,255);">Please fill in the form<br />to get alerts according to your personal needs.<br /></p>
            <form class="text-left" name="freqForm" method="post" style="background-color: rgba(30,40,51,0.81);height: auto;padding-bottom: 0px;padding-top: 20px;width: 350px;max-width: none;padding-right: 20px;padding-left: 20px;margin-top: 15%;"
                  action="/welcome">
                @csrf
                <h2 class="sr-only">Login Form</h2>

                <h6 class="text-nowrap" style="padding-top: 20px;">1. How long do you drive a day?
                    <br></h6>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Q1" value="Low"><label class="form-check-label" >Less than 3 hours</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Q1" value="Medium"><label class="form-check-label" >3 to 6 hours</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Q1" value="High"><label class="form-check-label" >More than 6 hours</label></div>
                <h6 class="text-nowrap" style="padding-top: 20px;">2. How many days do you drive a week?
                    <br></h6>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="Q2" value="Low"><label class="form-check-label" >Less than 3 days</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="Q2" value="Medium"><label class="form-check-label" >3 to 5 days</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="Q2" value="High"><label class="form-check-label" >More than 5 days</label></div>
                <h6 style="padding-top: 20px;">3. When do you usually drive?<br></h6>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Q3" value="High"><label class="form-check-label" >Early morning</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Q3" value="High"><label class="form-check-label" >Midnight</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Q3" value="Low"><label class="form-check-label" >Neither</label></div>
                <h6 class="text-nowrap" style="padding-top: 20px;font-size: 12px;color: rgb(255,255,255);">By clicking "Submit", you agree to our <a href="terms">term of service.</a></h6>
                <input id="freqInput" name="freq" type="text" value="" hidden>
                <div class="form-group"><button onclick="getFreq()" id ="btnSubmit" class="btn btn-primary btn-block d-sm-flex justify-content-sm-center" type="button" name="btnSubmit" >Submit</button></div>
            </form>
        </section>
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
    <script src="assets/js/survey.js"></script>
</body>

</html>
