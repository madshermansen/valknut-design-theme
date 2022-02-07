<?php
get_header();
?>
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
                    if (have_posts()) {
                        while(have_posts()) {
                            the_post();
                            echo "<div class=" . $first ." id='hidden" . $post_id . "'>";
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
                            echo $content;
                            echo "</div>";
                            $first = "hidden";
                            $post_id = $post_id + 1;
                            echo "</div>";
                        }
                    }
                    ?>
                </div>            
            </div>
            <h1 id="aqua" class="aqua">Our Portfolio</h1>

        </div>

</header>


    <main>
    <div class="section">
        <h1 class="aqua bold">Our previous projects!</h1>
        <div class="project">
            
            <div class="projectcontainer">
            <div class="redbox project-wrapper"></div>
                <div class="feature1-desc">
                    <h1>Decapod</h1>
                    <h3 class="robot">This is some filler text</h3>
                </div>
                <div class="feature1-image highest-index">
                    <img src="../wp-content/uploads/2022/01/Hendrik-Formal.png">
                </div>
            </div>
        </div>
    </div>
    </main>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

    <?php
    // Uses this to import the styles
    wp_footer();
    ?>

</html>