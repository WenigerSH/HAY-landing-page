<?php
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'facebook') !== false) {
    header('Content-Type: image/png');
    echo(file_get_contents("img/logo.png"));
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Free Mood Tracker Mobile App - "How Are You"</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/flexslider.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <meta name="description" content="Improve your mood thanks to this simple, beautiful and scientifically proven mobile mood tracker. Available on App Store for FREE. "/>
    <meta charset="utf-8"/>
    <script type="text/javascript" src="js/redirectToAppStore.js"></script>
</head>

<body>
    <div class="container">
        <header class="row">
            <div class="span6">
                <img src="img/logo.png" alt="HAY logo" class="logo-top" />
            </div>
            <div class="span6">
                <a href="https://itunes.apple.com/us/app/how-are-you-mood-tracker/id691974213?mt=8&uo=4"><img src="img/appstore-top.png" class="pull-right" alt="AppStore" /></a>
            </div>    
        </header><!-- header -->
        <div class="row" id="info">
            <div class="info-wrapper">
                <img src="img/icon.png" alt="HAY icon" class="hay-icon" />
                <h2>Lift up your mood</h2>
                <h3>with a simple tracking app</h3>
                <img src="img/chart.png" alt="mood chart" class="mood-chart" />
                <p style="margin-left: 2px;"><span>Research had proven</span> that by simply tracking something we are getting better at it. It applies to weight loss, money saving, bodybuilding and your mood as well.</p>
            </div>
            <img src="img/app.png" alt="app" class="app-view" />
        </div><!-- info -->
    </div><!-- container -->
    <div id="slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="slide slide-1">
                        <img src="img/slide-1.png" alt="slide-1" class="slide-1-photo pull-left"/>
                        <h2>Step 1. Measure your mood</h2>
                        <p>Determine your mood using proven <span><a href="http://en.wikipedia.org/wiki/Affect_measures"> the Positive and Negative Affect Schedule (PANAS)</a></span> in less than 2 minutes.</p> 
                        <p>
                            We ask you how strong do you feel separate emotions and calculate your mood based on that. 
                        </p>
                        <p>
                            E.g. how <strong>interested (wanting to be involved in something)</strong> do you feel right now?
                        </p>
                        <img src="img/slide-1-lights.png" alt="slide-1-lights" class="slide-1-lights" />
                    </div>
                </li>
                <li>
                    <div class="slide slide-2">
                        <img src="img/slide-2.png" alt="slide-2" class="slide-2-photo pull-left"/>
                        <h2>Step 2. Track your scores</h2>
                        <p>Track your daily scores to learn what could be causing your ups and downs.</p>
                        <p>Add notes to your scores for a more verbal detailed.</p>
                    </div>
                </li>
                <li>
                    <div class="slide slide-3">
                        <h2>Step 3. Lift your mood</h2>
                        <p>After few weeks your mood should be increasing.<br>It's a natural effect. When you keep track of something you are getting better at it. <span>It's free</span> so why not give it a try? </p>
                        <img src="img/slide-3.png" alt="slide-3" class="slide-3-photo" />
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- slider -->
    <div class="container">

        <footer>
            <img src="img/logo-white.png" alt="HAY logo" class="hay-logo-white" />
            <div class="row">
                <section id="social" class="span3">
                    <p>Follow us</p>
                    <div class="social-bg">
                        <a href="https://twitter.com/QuantumLabCo"><img src="img/twitter.png" alt="twitter" /></a>
                        <a href="http://pinterest.com/quantumlab/"><img src="img/pinterest.png" alt="pinterest" /></a>
                    </div>
                </section>

                <section id="form" class="span6">
                    <div class="row">
                        <p>Signup for more updates</p>
                        <form method="POST" action="addLead.php" id="addLeadForm">
                            <input type="text" name="email" required="required" class="input-email" placeholder="enter your email" />
                            <input type="submit" value="Send" class="submit" />
                        </form>
                    </div>
                    <div class="row" id="android-notif">
                        <p>Want <img src="img/android.png" alt="Android" class="android-logo" /> version? Let us know.</p>
                        <form method="POST" action="addAndroidLead.php" id="addLeadForm">
                            <input type="text" name="email" required="required" class="input-email" placeholder="enter your email" />
                            <input type="submit" value="Send" class="submit" />
                        </form>
                    </div>
                </section>

                <section id="appstore" class="span3">
                    <p>Get it for IPhone now</p>
                    <a href="https://itunes.apple.com/us/app/how-are-you-mood-tracker/id691974213?mt=8&uo=4"><img src="img/appstore-bottom.png" alt="AppStore" class="appstore-bottom" /></a>
                </section>
            </div>

            <div class="row" id="credits">
                <div class="footer-line"></div>
                <p><img src="img/hay-logo-small.png" alt="HAY" /> is made by <a href="http://www.quantumlab.co"><img src="img/quantum-logo.png" alt="Quantum Lab" /></a>.</p>
            </div>
        </footer>
    </div> 

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-36811418-2', 'gethowareyou.com');
      ga('send', 'pageview');

    </script>  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="js/noty/layouts/top.js"></script>

    <script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
    <script type="text/javascript" src="js/noty/themes/default.js"></script>

    <script type="text/javascript" src="js/main.js"></script>   
    <script type="text/javascript" src="js/custom.js"></script>  

</body>  
</html>