<?php
get_header();
?>

        <div class="main-background">
            <div class="container">
                <span id="frontpage-text" class="typewriter"></span><span id="frontpage-text" class='aqua flash'>&#x0002F;&#x0003E;</span><br>
                <button class="why-websites moreinfo-button linear-red-aqua">WHY WEBSITES?</button>
                <button class="contact moreinfo-button linear-red-aqua">CONTACT US</button>
            </div>
        </div>
        <img src="wp-content/themes/valknut-design/assets/svgs/BG_gradient2.svg" class="svgbgtop lowest-index">
        <img src="wp-content/themes/valknut-design/assets/svgs/6.svg" class="svgtop lowest-index">
    </header>


    <main>
        <div class="section">
        <img src="wp-content/themes/valknut-design/assets/svgs/9.svg" class="svg-about-us">
            <h1 id="header-front-page" class="header-front-page">About US</h1>
            <h2 class="featured-project-text bold">Featured Project</h2>
            <div class="the-featured-page redbox lowest-index">
            </div>
            <div class="the-featured-page highest-index">
                    <?php 
                    $first = "";
                    if (have_posts()) {
                        while(have_posts()) {
                            echo "<div class=" . $first .">";
                            echo '<div class="feature1-image highest-index">';
                            echo '<img src="';
                            echo catch_that_image();
                            echo '" alt="" />';
                            echo '</a>';
                            echo '</div> <div class="feature1-desc highest-index">';
                            the_post();
                            echo "<h2>";
                            
                            the_title();
                            echo "</h2>";
                            $content = get_the_content();
                            $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]>', $content);
                            echo $content;
                            echo "</div>";
                            $first = "hidden";
                            echo "</div>";
                        }
                    }
                    ?>                    
        </div>
    </div>
    <div class="section">
    <img src="wp-content/themes/valknut-design/assets/svgs/8.svg" class="svg-we-are-team">
            <div class="container">
                <!-- <h1 class="we-are-a-team">We are a team</h1> -->
                <div class="we-are-team-section redbox">
                </div>
                <div class="we-are-team-section redbox">
                    <div class="show-people">
                    <img src="<?php echo get_theme_mod("Valknut-Design-callout-person1-image")?>" class="person-photo">
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
    <div class="section">
        <h1 class="we-are-a-team center" id="we-are-a-team">Contact</h1>
        <div class="container contact-container ">
            <div class="contact-box redbox">
                <form class="form" action="wp-content/themes/valknut-design/contact-form.php" method="get">
                    <input name="name" type="text" class="required" id="name" placeholder="Your Name" required>
                    <input name="email "type="email" class="required" id="email" placeholder="Email"><br>
                    <input name="company" type="text" id="company-name" placeholder="Company Name">
                    <input name="phone" type="number" id="phone-number" placeholder="Phone number"><br>
                    <input name="project" type="text" class="required" placeholder="Tell us about your project" id="project-info" required><br>
                    <label for="file-input" id="label-file-input">
                    <div id="paper-clip-animation"><img src="wp-content/themes/valknut-design/assets/icons/checkmark.svg"></img></div>
                    <p class="file-attach">Attach a file</p>
                    </label>
                    <input name="file" type="file" id="file-input" onchange="uploadPicture()"><br>
                    <button type="submit" class="send moreinfo-button linear-red-aqua"></button>
                </form>
            </div>
            <div class="contact-box right">
                <div class="contact-info info">
                    <h4 class="bold">Mailing Address</h4>
                    <h5>Byfjordparken 15</h5>
                    <h5>4007 Stavanger</h5>
                    <h5>Norway</h5><br><br>

                    <h4 class="bold">Phone</h4>
                    <h5>+47 979 580 23</h5>
                </div>
            </div>
        </div>
        <img src="wp-content/themes/valknut-design/assets/svgs/8.svg" class="svg-contact lowest-index">
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