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
                        <a href="do-websites-matter" class="bold">DO WEBSITES MATTER?</a>
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
                        <a href="do-websites-matter" class="red">DO WEBSITES MATTER?</a>
                    </li>
                    <li>
                        <a href="get-a-website" class="red">GET A WEBSITE</a>
                    </li>
                    <li>
                        <a href="portfolio" class="red">PORTFOLIO</a>
                    </li>
                </ul>
            </div>
            <script src="wp-content/themes/valknut-design/navbar.js"></script>
            <script src="../wp-content/themes/valknut-design/navbar.js"></script>


        <link href="../wp-content/themes/valknut-design/navbar.css" rel="stylesheet">
<object class="svgtop lowest-index" class="svg-we-are-team" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/Homepage-load-animation.svg"></object>

<div class="do-websites-matter-container-frontpage">
    <div id="flex">
        <h1 class="bold">Do websites <span class="aqua">matter</span>?</h1>
        <h2 >The answer is definitively <span class="red">yes</span>.</h2>
        <h2 class="thin">We will make your website go from zero to <span class="aqua">Hero</span></h2>
    </div>
    <div class="aqua-top-bottom">
        <h2 class="bold">What makes a <span class="aqua">good</span> website?</h2>
    </div>
</div>
</header>
    <main>
        
    <div class="section" id="first-impressions">
    <object class="svgimpressions lowest-index" class="svgimpressions" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/Impactful-first-impressions.svg"></object>

        <div>
        <h1 class="center bold">Impactful First<br><span class="aqua">impressions</span></h1>

        <div class="aquabox">
        <h4 class="bold"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-First-Impressions");?></h4>
            <ul>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-First-Impressions-1");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-First-Impressions-2");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-First-Impressions-3");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-First-Impressions-4");?></h6></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="section" id="better-branding">
    <object class="svg-about-us lowest-index rotate" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/svg-about-us.svg"></object>

    <div>
        <h1 class="center bold">Better <span class="aqua">Branding</span></h1>
        <div class="redbox">
            <h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Better-Branding");?></h6>
        </div>
        </div>
    </div>
    <div class="section" id="customer-retention">
    <div>
        <h1 class="center bold">Customer<br><span class="aqua">retention</span> &  <span class="aqua">conversion</span></h1>
        <div class="redbox">
        <ul>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Customer-Retention-1");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Customer-Retention-2");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Customer-Retention-3");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Customer-Retention-4");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Customer-Retention-5");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Customer-Retention-6");?></h6></li>
        </ul>
        </div>
        </div>
    </div>
    <div class="section" id="security">
        <div>
        <h1 class="center bold"><span class="aqua">Security</span></h1>
        <div class="redbox">
        <ul>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Security-1");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Security-2");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Security-3");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-Security-4");?></h6></li>
        </ul>
        </div>
        </div>
    </div>
    <div class="section" id="security">
        <div>
        <h1 class="center bold">What does all this <span class="aqua">mean</span>?</h1>
        <ul>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-What-Does-It-Mean-1");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-What-Does-It-Mean-2");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-What-Does-It-Mean-3");?></h6></li>
            <li><h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-Impactful-What-Does-It-Mean-4");?></h6></li>
        </ul>
        </div>
    </div>
    </main>
    <footer>
    <div class="section" id="bottom-section">
        <h1 class="thin center">The only <span class="red">catch</span> is that it will cost you:<br>Amplify your <span class="red">digital identity</span>
        </h1>
    
     </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../wp-content/themes/valknut-design/animations-min.js"></script>
<!-- File not moving to aws -->
</body>

    <?php
    // Uses this to import the styles
    wp_footer();
    ?>

</html>