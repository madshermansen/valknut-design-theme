<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Valknut Design</title>

    <?php
    // Uses this to import the styles
    wp_head();
    ?>

</head>
<body style="background: #010B15">
<!-- <img src="wp-content/themes/valknut-design/assets/svgs/6.svg" class="svgtop"> -->
    <header class="header" id="header">
        <nav class="navbar navbar-style" id="nav">
            <div class="container highest-index">
                <div class="navbar-header">
                    <!-- <img src="<?php echo get_theme_mod("Valknut-Design-callout-logo-image")?>" class="logo"> -->
                    <h1 class="logo-title robot">Valknut Design</h1>
                </div>
                <ul class="menu nav navbar-right">
                    <li>
                    <a href="<?php echo home_url(); ?>" class="red bold">HOME</a>
                    </li>
                    <li>
                        <a href="why-websites-matter" class="bold">DO WEBSITES MATTER?</a>
                    </li>
                    <li>
                        <a href="get-a-website" class="bold">GET A WEBSITE</a>
                    </li>
                    <li>
                        <a href="portfolio" class="bold">PORTFOLIO</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="nav-mobile-close" class="nav-mobile-close">
        </nav>
        <div id="nav-mobile">


</div>
            <div class="hamburgernav" id="hamburgernav" onclick="runhamburgernav()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <ul id="mobilenavlist">
                    <li>
                    <a href="<?php echo home_url(); ?>" class="red bold">HOME</a>
                    </li>
                    <li>
                        <a href="why-websites-matter" class="bold">DO WEBSITES MATTER?</a>
                    </li>
                    <li>
                        <a href="get-a-website" class="bold">GET A WEBSITE</a>
                    </li>
                    <li>
                        <a href="portfolio" class="bold">PORTFOLIO</a>
                    </li>
                </ul>
            </div>
            <script src="wp-content/themes/valknut-design/navbar.js"></script>
            <script src="../wp-content/themes/valknut-design/navbar.js"></script>

