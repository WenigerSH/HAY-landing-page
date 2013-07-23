<!DOCTYPE html>
<html>
<head>
    <title>Free Mood Tracker Mobile App - "How Are You"</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <meta name="description" content="Improve your mood thanks to this simple, beautiful and scientifically proven mobile mood tracker. Available on App Store for FREE. "/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <header class="row">
        <div class="span12 text-center">
            <img src="img/logo.png" alt="HAY logo" style="margin-top: 40px;" class="logo-top" />
        </div>
    </header><!-- header -->
    <div class="row" id="info" class="text-center">
        <div class="span12 text-center donate">
        <?php
            switch($_GET['type']):
            case "1":
                echo '
                    <h2>Click PayPal Donate to donate 1$</h2>
                    (you will be redirected to PayPal)<br>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="RXRMY7HBC47TN">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
                    </form>';
                break;
            case "5":
                echo '
                    <h2>Click PayPal Donate to donate 5$</h2>
                    (you will be redirected to PayPal)<br>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="QCVJEEEHA63TG">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
                    </form>';
                break;
            default:
                echo '
                    <h2>Click PayPal Donate to donate any amount</h2>
                    (you will be redirected to PayPal)<br>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="GADRFRB5BYXYN">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
                    </form>';
                break;
            endswitch;

        ?>
        </div>
    </div><!-- info -->
</div><!-- container -->

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