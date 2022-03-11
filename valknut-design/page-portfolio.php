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
                    <a href="<?php echo home_url(); ?>" class="bold">HOME</a>
                    </li>
                    <li>
                        <a href="why-websites-matter" class="bold">DO WEBSITES MATTER?</a>
                    </li>
                    <li>
                        <a href="get-a-website" class="bold">GET A WEBSITE</a>
                    </li>
                    <li>
                        <a href="portfolio" class="bold red">PORTFOLIO</a>
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
                    <a href="<?php echo home_url(); ?>" class="red">HOME</a>
                    </li>
                    <li>
                        <a href="why-websites-matter" class="red">DO WEBSITES MATTER?</a>
                    </li>
                    <li>
                        <a href="get-a-website" class="red">GET A WEBSITE</a>
                    </li>
                    <li>
                        <a href="portfolio" class="red bold">PORTFOLIO</a>
                    </li>
                </ul>
            </div>
            <script src="wp-content/themes/valknut-design/navbar.js"></script>
            <script src="../wp-content/themes/valknut-design/navbar.js"></script>


        <link href="../wp-content/themes/valknut-design/navbar.css" rel="stylesheet">
        <object class="svgtop lowest-index" class="svg-we-are-team" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/Homepage-load-animation.svg"></object>

        <h1 class="red center bold">Latest Project</h1>
        <div class="section" id="about-us">
        <object class="svg-about-us lowest-index" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/svg-about-us.svg"></object>
            <div class="the-featured-page redbox lowest-index">
            </div>
            <div class="the-featured-page highest-index">
                <div class="flip">
                    <?php 

                    $first = "first";
                    $post_id = 0;
                    $sample_array = get_posts($arguments);
                    foreach($sample_array as $post) {
                        echo "<div class=" . $first ." id='hidden" . $post_id . "'>";
                        echo '<div class="feature1-image portfolioimg highest-index">';
                        echo '<img src="';
                        echo catch_that_image();
                        echo '" alt="" />';
                        echo '</a>';
                        echo '</div> <div class="feature1-desc portfoliocaption highest-index">';
                        echo "<h2>";
                        echo "</h2>";
                        $content = get_the_content();
                        $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]>', $content);
                        echo $content;
                        echo "</div>";
                        $first = "hidden";
                        $post_id = $post_id + 1;
                        echo "</div>";
                        ++$count;
                    }
                    ?>
                </div>            
            </div>
            <h1 id="aqua" class="aqua">Our Portfolio</h1>

        </div>

</header>


    <main>
    <div class="section" id="prevprojects">
        <h1 class="aqua bold">Our previous projects!</h1>
                <?php 
$first = "first";
$post_id = 0;
$sample_array = get_posts($arguments);
foreach($sample_array as $post) {

    $content = get_the_content();
    $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
    echo '<div class="project"><div class="projectcontainer">';
    echo '<div class="redbox project-wrapper"><div class="feature1-desc">';
    echo '<h2>' . $post->post_title . '</h2>';
    echo '<h5 class="robot">' . $content . '</h5>';
    echo "</div>";
    echo '<div class="feature1-image highest-index">';
    echo "<img src=" . catch_that_image() . ">";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
 ?>
 </div>

                </div>
            </div>
        </div>
    </div>
    </main>
    </footer>
    <script src="../wp-content/themes/valknut-design/animations-portfolio.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

    <?php
    // Uses this to import the styles
    wp_footer();
    ?>

</html>
