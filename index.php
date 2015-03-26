<!DOCTYPE html>
<?php $thisPage="Index"; ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Guillermo Gineste</title>
        <meta name="description" content="Some of the things I do in paint­ing, drawing, photog­raphy and video.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index2_style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body id="index">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- - - - - - - - - - -  MENU - - - - - - - - - - -->
        <div class="menu_wrap">

            <div class="button_menu">
                <img src="img/btn_m.png" alt="menu">
                <span>This is the menu.</span>
            </div>
            
            <nav class="menu_left">
                <ul>
                    <?php include("phpincludes/navigation.php"); ?>
                </ul>
            </nav>

        </div>
        <!--  - - - - - - - - - -  END MENU  - - - - - - - - - -  -->

        <!--  - - - - - - - - - -  ASIDE  - - - - - - - - - -  -->

        <div class="aside_wrap">

            <div class="button_aside">
            <span>And here comments or notes.</span>
                <img src="img/btn_i.png" alt="info">
            </div>

            <aside class="info_aside">
                <p>Here you can read small texts that complement the works, to see the list of works open the menu in the left side of the screen</p>
            </aside>
        </div>
        <!--  - - - - - - - - - -  END ASIDE  - - - - - - - - - -  -->

        <!-- /////////////////////// CONTENT /////////////////////// -->
        <div class="content">
            
        </div>
        <!-- /////////////////////// END CONTENT /////////////////////// -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-31309357-1');ga('send','pageview');
        </script>
    </body>
</html>
