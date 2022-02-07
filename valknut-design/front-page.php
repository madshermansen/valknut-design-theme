<?php
get_header();
?>

        <div class="main-background">
            <div class="container">
                <span id="frontpage-text" class="typewriter"></span><span id="frontpage-text" class='aqua flash'>&#x0002F;&#x0003E;</span><br>
                <span class="flex-mobile-column">
                <button class="why-websites moreinfo-button linear-red-aqua">WHY WEBSITES?</button>
                <button class="contact moreinfo-button linear-red-aqua">CONTACT US</button>   
                </span>
            </div>
        </div>
        <div class="lowest-index svg-background"></div>
        <object class="svgtop lowest-index" class="svg-we-are-team" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/Homepage-load-animation.svg"></object>
        <div class="oval" id="oval"></div>
    </header>


    <main>
        <div class="section" id="about-us">
            <h1 id="header-front-page" class="header-front-page animated">About US</h1>
            <h2 class="featured-project-text bold">Featured Project</h2>
            <div id="animateredbox" class="the-featured-page redbox lowest-index-plus">
                Hello world!
            </div>
            <div class="the-featured-page highest-index">
                <div class="flip">
                    <?php 
                    $first = "first";
                    $type_id = "type";
                    $post_id = 0;
                    if (have_posts()) {
                        while(have_posts()) {
                            the_post();
                            echo "<div class=" . $first ." id='hidden " . $post_id . "'>";
                            echo '<div class="feature1-image highest-index">';
                            echo '<img src="';
                            echo catch_that_image();
                            echo '" alt="" />';
                            echo '</a>';
                            echo '</div> <div class="feature1-desc highest-index">';
                            echo "<h2>";
                            
                            the_title();
                            echo "</h2>";
                            $content = get_the_content();
                            $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]>', $content);
                            $content = preg_replace("/<p>/", "<p id='" . $type_id . "'>", $content);  
                            echo $content;
                            echo "</div>";
                            $first = "hidden";
                            $post_id = $post_id + 1;
                            echo "</div>";
                            $type_id = "";
                        }
                    }
                    ?>
                </div>                 
        </div>
        
    </div>
    <div class="section" id="our-team">
            <h1 id="we-are-team" class="red bold center">We are a team</h1>
            <div class="container">
                <!-- <h1 class="we-are-a-team">We are a team</h1> -->
                <div class="we-are-team-section redbox">
                </div>
                <div class="we-are-team-section redbox">
                    <div class="show-people">
                    <img src="<?php echo get_theme_mod("Valknut-Design-callout-person1-image")?>" class="person-photo">
                    <div class="signature"></div>
                    <span class="caption">
                        <h4 class="bold off-center"><?php echo get_theme_mod("Valknut-Design-callout-person1-name");?></h4>
                        <h5 class="aqua italics off-center"><?php echo get_theme_mod("Valknut-Design-callout-person1-role");?></h5><br>
                        <h6 class="robot"><?php echo get_theme_mod("Valknut-Design-callout-person1-description");?></h6>
                    </span>
                    </div>
                    <div class="show-people">
                    <img src="<?php echo get_theme_mod("Valknut-Design-callout-person2-image")?>" class="person-photo">
                    <span class="caption">                        
                        <h4 class="bold off-center"><?php echo get_theme_mod("Valknut-Design-callout-person2-name");?></h4>
                        <h5 class="aqua italics off-center"><?php echo get_theme_mod("Valknut-Design-callout-person2-role");?></h5><br>
                        <h6 class="robot"><?php echo get_theme_mod("Valknut-Design-callout-person2-description");?></h6>
                    </span>
                    </div>
                    <div class="show-people">
                    <img src="<?php echo get_theme_mod("Valknut-Design-callout-person3-image")?>" class="person-photo">
                    <span class="caption">
                    <h4 class="bold off-center"><?php echo get_theme_mod("Valknut-Design-callout-person3-name");?></h4>
                        <h5 class="aqua italics off-center"><?php echo get_theme_mod("Valknut-Design-callout-person3-role");?></h5><br>
                        <h6 class="robot"><?php echo get_theme_mod("Valknut-Design-callout-person3-description");?></h6>
                    </span>
                    
                    </div>
                </div>

            </div>
    </div>
    </main>
    <footer class="">
    <div class="section" id="bottom-section">
        <h1 class="we-are-a-team center" id="we-are-a-team">Contact</h1>
        <div class="contact-container ">
            <div class="contact-box redbox">
                
                <form class="form" action="https://getform.io/f/31a8218f-b87b-4cef-93cb-7b3b476fdf0f" method="post">
                    <input name="name" type="text" class="required" id="name" placeholder="Your Name" required>
                    <input name="email "type="email" class="required" id="email" placeholder="Email"><br>
                    <input name="company" type="text" id="company-name" placeholder="Company Name">
                    <input name="phone" type="number" id="phone-number" placeholder="Phone number"><br>
                    <textarea rows="4" name="project" class="required" placeholder="Tell us about your project" id="project-info"></textarea><br>
                    <button type="submit" class="send moreinfo-button linear-red-aqua">SEND</button>
                </form>
            </div>
            <div class="contact-box right">
                <div class="contact-info info">
                    <h4 class="bold">Mailing Address</h4>
                    <h5>Børehaugen 5,</h5>
                    <h5>4006 Stavanger</h5>
                    <h5>Norway</h5><br><br>

                    <h4 class="bold">Phone</h4>
                    <h5>+47 979 580 23</h5>
                </div>
            </div>
        </div>
     </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="wp-content/themes/valknut-design/animations.js"></script>
</body>

    <?php
    // Uses this to import the styles
    wp_footer();
    ?>

</html>