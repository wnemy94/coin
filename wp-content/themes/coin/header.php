<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come after these tags -->

    <!-- Fill in the following meta tags -->
    <meta name="keywords" content="keyword1, keyword2, keyword3"/>
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <!-- Change the site title -->
    <title><?php bloginfo('name'); ?></title>

    <!-- You can regenerate the favicons as you wish using http://realfavicongenerator.net/, see the theme documentation -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url ');?>favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo('template_url');?>/favicon/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('template_url');?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:200,300,300i,400,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Pretty Photo -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/prettyPhoto.css"/>

    <!-- Flickity -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/flickity.css"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/animate.css"/>

    <!-- Skills bar -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/skills-bar.css"/>

    <!-- custom.css - the styling for this theme -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/custom.css">

    <!-- skin: you can change this to: blue.css or gray.css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/skin/gray.css">

    <!-- Modernizr -->
    <script src="<?php bloginfo('template_url');?>/js/modernizr-custom.js"></script>

</head>

<body>

<!-- status spinner showing while loading the page -->
<div id="preloader"></div>

<!-- HEADER -->
<header>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top navbar-inverse">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?php bloginfo('template_url');?>/img/skin/gray/logo.png" alt="bestAG"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hero">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Что это?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Информация</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- HEADER END -->