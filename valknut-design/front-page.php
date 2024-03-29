<?php
get_header();
?>

        <div class="main-background">
            <div class="container">
                <span id="frontpage-text" class="typewriter"></span><span id="frontpage-text" class='aqua flash'>&#x0002F;&#x0003E;</span><br>
                <span class="flex-mobile-column">
                <button class="why-websites moreinfo-button linear-red-aqua" onclick="location.href='why-websites-matter'">WHY WEBSITES?</button>
                <button class="contact moreinfo-button linear-red-aqua" onclick="document.getElementById('bottom-section').scrollIntoView();">CONTACT US</button>   
                </span>
            </div>
        </div>
        <div class="lowest-index svg-background"></div>
        <!-- cookies to not play website -->
        <object class="svgtop lowest-index" class="svg-we-are-team" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/Homepage-load-animation.svg"></object>
        <div style="width: 100%;position:absolute;top:710px;height:calc(100% - 710px);" class="hamburgerchange" data-color="#fff">

        </div>
        <div class="oval" id="oval"></div>
    </header>
    <div id="transition-test"></div>
    <?php include("wp-content/themes/valknut-design/assets/svg-animations/preloader.html")?>
    <style>  
#mads-signature  {
fill: none;
stroke: white;
stroke-dasharray: 2221;
stroke-dashoffset: 2221;
}

@keyframes sign {
to {
    stroke-dashoffset:0;
}
}

.show-people:hover #mads-signature{
animation: 1.5s sign forwards;
}
#folke-signature1, #folke-signature2, #folke-signature3, #folke-signature4, #folke-signature5, #folke-signature6 {
                fill: none;
            stroke: white;
            stroke-miterlimit: 10;
            stroke-width: 3px;
            stroke-dasharray: 2500;
            stroke-dashoffset: 2500;
        }

        .show-people:hover #folke-signature1, .show-people:hover #folke-signature2, .show-people:hover #folke-signature3, .show-people:hover #folke-signature4, .show-people:hover #folke-signature5, .show-people:hover #folke-signature6{
            animation: sign 2.5s forwards;
        }
        #hendrik-signature1, #hendrik-signature2, #hendrik-signature3, #hendrik-signature4, #hendrik-signature5, #hendrik-signature6, #hendrik-signature7, #hendrik-signature8, #hendrik-signature9, #hendrik-signature10, #hendrik-signature11, #hendrik-signature12 {
            fill: none;
            stroke: white;
            stroke-miterlimit: 10;
            stroke-width: 3px;
            stroke-dasharray: 3000;
            stroke-dashoffset: 3000;
        }

        .show-people:hover #hendrik-signature1, .show-people:hover #hendrik-signature2, .show-people:hover #hendrik-signature3, .show-people:hover #hendrik-signature4, .show-people:hover #hendrik-signature5, 
        .show-people:hover #hendrik-signature6, .show-people:hover #hendrik-signature7, .show-people:hover #hendrik-signature8,.show-people:hover  #hendrik-signature9, .show-people:hover #hendrik-signature10, .show-people:hover #hendrik-signature11, 
        .show-people:hover #hendrik-signature12{
            animation: sign 1.5s forwards;
        }
</style>
    <main>
        <div class="section hamburgerchange" id="about-us" data-color="#fff">
            <h2 id="header-front-page" class="header-front-page animated">About Us</h2>
            <h2 class="featured-project-text bold">Featured Project</h2>
            <div class="the-featured-page redbox lowest-index-plus">
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
                            echo "<div class=" . $first ." id='hidden" . $post_id . "'>";
                            echo '<div class="feature1-image highest-index">';
                            echo '<img src="';
                            echo catch_that_image();
                            echo '" alt="Portfolio Image" />';
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
                <div class="we-are-team-section redbox">
                    <div class="show-people">
                    <object class="we-are-team-svg-small-mobile lowest-index" class="svg-we-are-team" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/We-are-a-team-mobile-1.svg"></object>

                    <img src="<?php echo get_theme_mod("Valknut-Design-callout-person1-image")?>" class="person-photo" alt="WebDev">
                    <div class="signature"><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 521.56 232.94"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1">
                        <path id="mads-signature" d="M95.06,196S106.28,257.7,263.31,10.94l-28,140.21L331.71,10.94s-76.35,203.61-53.19,196c0,0,39.62,7.5,62.11-33.2-25.7-24.63-63.29,33.7-43.91,34.27,42,1.23,34.27-15,48.19-33.2-8.57,17.14-20.35,33.2-6.42,33.2,5.64,0,21.41,3.21,77.1-27.84-3.21-51.4-77.47,32.74-45,27.84C448.79,196.2,486.14,15.26,472.79,22.16c-50.47,26.09,173,164.26-63.63,198.67-203.39,29.58-374.82-8.44-382.3-43.9C11.31,103.21,55.77,224,1.16,157.65" style="fill:none;stroke:white;stroke-miterlimit:10;stroke-width:3px"/></g></g></svg>
</div>
                    <span class="caption">
                        <h4 class="bold off-center"><?php echo get_theme_mod("Valknut-Design-callout-person1-name");?></h4>
                        <h5 class="aqua italics off-center"><?php echo get_theme_mod("Valknut-Design-callout-person1-role");?></h5><br>
                        <h6 class="robot"><?php echo get_theme_mod("Valknut-Design-callout-person1-description");?></h6>
                    </span>
                    </div>
                    <div class="show-people">
                    <object class="we-are-team-svg-small-mobile lowest-index" class="svg-we-are-team" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/We-are-a-team-mobile-2.svg"></object>

                    <div class="signature highest-index" style="width: 150px; height: 100px; ">
                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 725.82 232.01"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1">
        <path id="folke-signature1" d="M50,92.65a70.68,70.68,0,0,0,8-1.5A67.87,67.87,0,0,0,65.9,88.8a48.25,48.25,0,0,0,13.83-8.44C87.93,73.22,94,63.91,98.36,54a75.57,75.57,0,0,0,2.9-7.57,11.77,11.77,0,0,0,.49-1.87l.3-2c.18-1.33.35-2.68.45-4a42.13,42.13,0,0,0-1.4-15.9,51.71,51.71,0,0,0-2.92-7.48C97.6,14,97,12.74,96.36,11.55l-.48-.9a7.28,7.28,0,0,0-.47-.82c-.35-.54-.73-1.07-1.13-1.6a20.81,20.81,0,0,0-5.59-5.31,3.61,3.61,0,0,0-3-.55,5.73,5.73,0,0,0-2.46,2.26,23.71,23.71,0,0,0-2.84,7.21,60.18,60.18,0,0,0-1.32,7.93l-1,8.12c-.31,2.65-.44,5.38-.64,8.1L76,52.35l-.72,8.18c-.34,2.73-.67,5.46-1.07,8.18a317.54,317.54,0,0,1-6.8,32.2c-2.76,10.61-6,21.09-9.44,31.48q-2.64,7.77-5.51,15.48L51,151.71l-.74,1.92-.37,1c-.1.3-.21.58-.31.9-.82,2.55-1.66,5.23-2.61,7.81A236.4,236.4,0,0,1,33.1,193.18c-.66,1.21-1.27,2.4-2,3.64s-1.45,2.39-2.23,3.54A71.82,71.82,0,0,1,23.83,207a36.47,36.47,0,0,1-6.18,5.83,12.84,12.84,0,0,1-4,2,7.56,7.56,0,0,1-4.81-.14A9.36,9.36,0,0,1,5,211.93a18.05,18.05,0,0,1-1.31-1.78,15.94,15.94,0,0,1-1.11-1.91A29.28,29.28,0,0,1,.38,200a41.66,41.66,0,0,1-.28-8.43,29,29,0,0,1,1.75-8.32c.25-.68.59-1.33.89-2l.95-1.83,1.92-3.63c1.31-2.41,2.62-4.81,4-7.19A105,105,0,0,1,19,155,106.69,106.69,0,0,1,43.74,133.3a134.52,134.52,0,0,1,14.39-8c2.48-1.18,5-2.29,7.54-3.31a72.36,72.36,0,0,1,7.85-2.51c5.31-1.37,10.68-2.41,16.07-3.3s10.82-1.62,16.28-2c-5.44.51-10.83,1.43-16.2,2.43s-10.7,2.15-15.94,3.62a68.45,68.45,0,0,0-7.7,2.63c-2.5,1.06-5,2.21-7.4,3.43a133.61,133.61,0,0,0-14.09,8.2,105.24,105.24,0,0,0-24.1,21.61,102.78,102.78,0,0,0-9,13.49c-1.34,2.36-2.61,4.76-3.88,7.17l-1.87,3.64-.92,1.82c-.25.59-.55,1.16-.76,1.77a32.64,32.64,0,0,0-1.14,15.58,27.58,27.58,0,0,0,2,7.49c1.15,2.18,2.79,4.47,4.8,5.2a5.06,5.06,0,0,0,3.22,0,10.6,10.6,0,0,0,3.22-1.65,34.13,34.13,0,0,0,5.67-5.43,65.92,65.92,0,0,0,4.83-6.41c.75-1.11,1.45-2.26,2.12-3.4s1.29-2.37,1.93-3.57a231.79,231.79,0,0,0,13.57-29.57c.93-2.56,1.71-5.09,2.55-7.75.1-.32.24-.69.36-1l.36-1,.73-1.91,1.43-3.83c1.89-5.11,3.68-10.25,5.42-15.41,3.5-10.32,6.73-20.73,9.52-31.25A314.08,314.08,0,0,0,71.49,68.3c.41-2.69.75-5.37,1.1-8.07l.75-8.14,1.5-16.28c.22-2.72.36-5.45.7-8.22l1.06-8.14a63.67,63.67,0,0,1,1.49-8.2,25.63,25.63,0,0,1,3.26-7.91A7.88,7.88,0,0,1,84.94.26,4.75,4.75,0,0,1,87.57.12,7.76,7.76,0,0,1,89.78,1a17.08,17.08,0,0,1,3.41,2.74A31.26,31.26,0,0,1,96,7c.42.57.82,1.15,1.21,1.76a10.18,10.18,0,0,1,.54,1l.47.92c.63,1.22,1.24,2.46,1.81,3.72a53,53,0,0,1,2.93,7.8,43.79,43.79,0,0,1,1.27,16.57c-.12,1.38-.32,2.75-.51,4.11l-.34,2a13.4,13.4,0,0,1-.56,2.08,73.32,73.32,0,0,1-3.07,7.69c-4.64,9.95-11,19.27-19.46,26.35a48.65,48.65,0,0,1-14.19,8.25,65.85,65.85,0,0,1-7.93,2.15A71.27,71.27,0,0,1,50,92.65Z"/>
        <path id="folke-signature2" d="M380.11,96.88a22.09,22.09,0,0,1,2.06-3.51,36.94,36.94,0,0,1,2.64-3.08c1.77-2,3.86-4,6.56-4.79a4.79,4.79,0,0,1,4.11.52,7.66,7.66,0,0,1,2.38,3.41,15.59,15.59,0,0,1,1.17,4,16.87,16.87,0,0,1,.05,4.14,39.66,39.66,0,0,1-1.87,8c-.86,2.58-1.86,5.12-2.93,7.62a150.4,150.4,0,0,1-7.3,14.59c-.67,1.18-1.38,2.35-2.11,3.5s-1.42,2.27-2.1,3.44c-1.36,2.33-2.67,4.7-4,7.06l-1,1.78-.27.46-.19.28-.16.2-.63.81c-.87,1.07-1.77,2.11-2.72,3.12a30.19,30.19,0,0,1-6.48,5.28,14.94,14.94,0,0,1-4,1.66,7.81,7.81,0,0,1-4.58-.14,5.2,5.2,0,0,1-2-1.42,5.49,5.49,0,0,1-1.15-2.17,8.42,8.42,0,0,1,.19-4.55,18.61,18.61,0,0,1,4.49-7.26,36.32,36.32,0,0,1,6.47-5.29,114.3,114.3,0,0,1,14.54-7.59c4.93-2.26,9.92-4.39,14.63-6.87a57.86,57.86,0,0,0,6.75-4.18,64.46,64.46,0,0,0,6.16-5,85.09,85.09,0,0,0,10.51-12c1.58-2.15,3.14-4.37,4.65-6.59a78,78,0,0,0,4.18-6.8,96.3,96.3,0,0,0,6.37-14.68c1.78-5.07,3.38-10.24,5-15.4a83.21,83.21,0,0,0,3.64-15.54A54.74,54.74,0,0,0,442.93,24a25,25,0,0,0-2.09-7.31,3.89,3.89,0,0,0-2-2,3.7,3.7,0,0,0-2.79.52,21.87,21.87,0,0,0-5.63,5,47,47,0,0,0-4.58,6.38,53.91,53.91,0,0,0-5.77,14.69c-.63,2.58-1.1,5.2-1.49,7.86l-1.19,8q-1.2,8-2.5,16.07c-1.76,10.7-3.6,21.39-6.15,32-.63,2.65-1.35,5.29-2.17,7.9s-1.74,5.17-2.6,7.73c-1.75,5.09-3.25,10.27-4.64,15.49s-2.78,10.45-3.88,15.73-2.15,10.6-3.15,15.92L386.36,200q-2.87,16-5.4,32c2.65-21.51,6.36-42.87,9.85-64.25.93-5.34,1.88-10.67,2.95-16s2.38-10.61,3.69-15.86,2.78-10.51,4.48-15.69c.84-2.58,1.72-5.13,2.48-7.7s1.44-5.17,2-7.79c1.2-5.24,2.18-10.56,3.14-15.87s1.85-10.65,2.7-16,1.65-10.7,2.43-16l1.16-8c.39-2.7.86-5.42,1.49-8.1a56.82,56.82,0,0,1,6-15.47,50.17,50.17,0,0,1,4.85-6.82,24.11,24.11,0,0,1,6.43-5.72,8.22,8.22,0,0,1,2.29-.85,5.37,5.37,0,0,1,2.72.11A5.52,5.52,0,0,1,442,13.35a8.64,8.64,0,0,1,1.42,2,19.66,19.66,0,0,1,1.56,4.1c.38,1.37.63,2.74.88,4.11a55.33,55.33,0,0,1,.75,8.32,62.18,62.18,0,0,1-.51,8.3,86.27,86.27,0,0,1-3.82,16c-1.63,5.17-3.25,10.35-5.09,15.49a99,99,0,0,1-6.61,15.06,79.64,79.64,0,0,1-4.35,7c-1.55,2.25-3.11,4.46-4.75,6.66a87.3,87.3,0,0,1-10.89,12.35,68.88,68.88,0,0,1-6.43,5.23,63.66,63.66,0,0,1-7.07,4.33c-4.87,2.56-9.89,4.61-14.84,6.8a110.5,110.5,0,0,0-14.33,7.24,33.56,33.56,0,0,0-6.13,4.9,16.63,16.63,0,0,0-4.08,6.37,6.44,6.44,0,0,0-.2,3.46,3.23,3.23,0,0,0,2,2.29,5.82,5.82,0,0,0,3.42.1,13.14,13.14,0,0,0,3.5-1.42,28.59,28.59,0,0,0,6.11-4.91c.92-1,1.8-1.94,2.65-3l.62-.78.16-.2.09-.14.25-.41,1-1.74c1.36-2.34,2.7-4.7,4.1-7,.69-1.16,1.43-2.34,2.18-3.47s1.44-2.26,2.13-3.41a149.94,149.94,0,0,0,7.53-14.31c1.12-2.45,2.16-4.94,3.06-7.47a38.3,38.3,0,0,0,2-7.76,16.4,16.4,0,0,0,0-4,14.63,14.63,0,0,0-1-3.82,7,7,0,0,0-2.12-3.21,4.26,4.26,0,0,0-3.67-.53A10.71,10.71,0,0,0,388,87.71a23.91,23.91,0,0,0-3,2.73,38.54,38.54,0,0,0-2.72,3A22.55,22.55,0,0,0,380.11,96.88Z"/>
        <path id="folke-signature3" d="M242.4,77.31a33,33,0,0,0,13,1.22,32.38,32.38,0,0,0,12.45-3.69A44.49,44.49,0,0,0,273.16,71c1.69-1.38,3.33-2.84,4.89-4.36a57.48,57.48,0,0,0,4.45-4.79c1.4-1.69,2.73-3.41,4-5.21a58.51,58.51,0,0,0,6.09-11.49,56.74,56.74,0,0,0,3.63-12.45,36.66,36.66,0,0,0-.46-12.79,23.88,23.88,0,0,0-.82-3,9.56,9.56,0,0,0-1.5-2.54,7.36,7.36,0,0,0-4.85-2.73,5.13,5.13,0,0,0-2.63.45,9.74,9.74,0,0,0-2.39,1.67,19.69,19.69,0,0,0-3.68,5,97.58,97.58,0,0,0-5.07,12c-3.36,8.17-6.25,16.4-9.06,24.75-5.61,16.68-10.85,33.5-16.39,50.24L247.19,112c-.75,2.11-1.57,4.2-2.49,6.24a109.4,109.4,0,0,1-6.19,11.86,106.35,106.35,0,0,1-7.6,11,62.81,62.81,0,0,1-4.48,5.06,38.76,38.76,0,0,1-5.24,4.4,32.32,32.32,0,0,1-6,3.33,17.61,17.61,0,0,1-7,1.51,6.78,6.78,0,0,1-3.86-1.2,4.75,4.75,0,0,1-1.44-1.73l-.22-.51-.15-.45c-.1-.3-.16-.61-.24-.92a11.71,11.71,0,0,1,1-7.23,22.69,22.69,0,0,1,3.95-5.77,36.49,36.49,0,0,1,5.1-4.54,38.83,38.83,0,0,1,5.72-3.68,24.86,24.86,0,0,1,6.56-2.2,43.42,43.42,0,0,1,13.51,0,42.71,42.71,0,0,1,12.86,4,81.68,81.68,0,0,1,11.4,6.93c3.62,2.54,7.15,5.14,10.81,7.56a69.51,69.51,0,0,0,11.4,6.4,26.28,26.28,0,0,0,12.66,2.21,36.66,36.66,0,0,0,12.45-3.78,91.24,91.24,0,0,0,11-7.2,91.12,91.12,0,0,1-10.82,7.62A37.14,37.14,0,0,1,297.32,155a27.44,27.44,0,0,1-13.16-2,71.85,71.85,0,0,1-11.77-6.22c-7.49-4.7-14.35-10.37-22.22-14A42.87,42.87,0,0,0,225,129.43a22.2,22.2,0,0,0-5.91,2.07,37.79,37.79,0,0,0-5.31,3.55c-3.35,2.6-6.5,5.69-8.19,9.38a9,9,0,0,0-.76,5.63c.06.22.1.46.18.68l.11.33.11.25a2.1,2.1,0,0,0,.65.77,4.26,4.26,0,0,0,2.37.66,14.85,14.85,0,0,0,5.85-1.34,28.85,28.85,0,0,0,5.49-3.08,43.15,43.15,0,0,0,9.1-9,103.35,103.35,0,0,0,7.32-10.76A107.17,107.17,0,0,0,242,117c.88-2,1.66-4,2.37-6l2.1-6.24c5.61-16.68,10.93-33.48,16.64-50.16,2.85-8.33,5.85-16.71,9.23-24.82a97.84,97.84,0,0,1,5.3-12.28A22.2,22.2,0,0,1,281.91,12a12,12,0,0,1,3-2,7.41,7.41,0,0,1,3.82-.6A9.59,9.59,0,0,1,295.11,13a11.51,11.51,0,0,1,1.79,3.16,24.15,24.15,0,0,1,.87,3.36A38.22,38.22,0,0,1,298.05,33a43.8,43.8,0,0,1-1.61,6.55c-.69,2.11-1.46,4.21-2.33,6.26a58.68,58.68,0,0,1-6.45,11.69c-1.3,1.81-2.71,3.54-4.17,5.21a58.28,58.28,0,0,1-4.66,4.77q-2.44,2.25-5.07,4.3a46.4,46.4,0,0,1-5.5,3.76A32.7,32.7,0,0,1,255.46,79,33.39,33.39,0,0,1,242.4,77.31Z"/>
        <path id="folke-signature4" d="M108.39,115.68c-27.54,8.57-39.6,37.7-23.14,37.16,15-.49,26.11-30.38,22.59-33.06-2.8-2.13-13.6,9.83-8.68,8.62C116,124.25,138,100.06,155.63,58.27c-15.4,37.39-48.39,94.57-37.39,94.57,4.4-2.2,48.39-74.78,57.18-101.17-22,26.39-35.34,67.74-37.29,75.67,1.66-5.17,24.1-18.49,17.5-3.09-6.6,13.19-8.84,11.92-17.59,4.4,0,0,4.39,28.59,17.59,24.19,8.8-4.4,8.8-4.4,13.2-8.8,6.95-6.95,12.42-18.16,0-13.19-11,4.4-28.6,35.19,19.79,15.39"/>
        <path id="folke-signature5" d="M397.54,151.42s9.23-.68,12.8-3.32c8-6,20.85-9.76,20.85-22.85-9.35,5.61-15,11.22-17,18.39-1.67,5.93-1.73,11.52,6.31,7.86,10.38-4.73,29.85-25.31,29.85-30.22s-4.91,2.45-2.46,4.91a7.48,7.48,0,0,0,9.82,0c2.46-2.46-7.75,12-11.6,17.76-4.92,7.37-1.05,14.75,11.26-.06,9.75-12.18,7-7.67,16.78-22.38-11.22,22.44-7,15.18-16.82,29.91,11.21-16.82,17.52-24.3,22.43-24.3,7.48,1.87,1.87,13.09-5.61,24.3,7.48-11.21,14.07-24.3,22.43-24.3,3.74,0,0,11.22-7.48,24.3,14.63-13.24,26.18-22.43,37.39-24.3-18.69,3.74-28,20.57-18.69,24.3,10.58-1.38,16.82-16.82,18.69-24.3-6.51,18.41-11.21,26.17-3.74,20.57,13.09-11.22,14.77-16.54,18.7-22.44-4.1,7.34-3.24,8.88-13.09,26.17,11.22-14.95,11.22-14.95,18.69-20.56,16.83-5.61,1.87,13.09-3.73,20.56,9.34-3.73,41.12-24.3,35.51-24.3-20.56,5.61-9.5,10.27-7.47,13.09,5.64,7.86-11.22,13.08-13.09,9.34l9.35-3.73c14.73-4.91,20.56-5.61,30.5-11,3.78-2,11.89-7.72,6.88-7.72-5.6,0-14.95,5.61-21.64,14.29-2.44,3.16-2.75,11.15,1.08,10,10.33-3,24.57-15.76,33.65-28-5.87,11.4-9.62,15.67-19.23,27.8,9.88-11,19.23-22.19,28.58-24.06,15.4-3.08-6.39,17.73-11.22,24.3,12-2.26,59.82-1.87,109-32.6"/>
        <path id="folke-signature6" d="M322.79,156.17c3.86,0,3.87-6,0-6s-3.87,6,0,6Z"/></g></g></svg>
                    </div>
                    <img src="<?php echo get_theme_mod("Valknut-Design-callout-person2-image")?>" class="person-photo" alt="Management">
                    <span class="caption">                        
                        <h4 class="bold off-center"><?php echo get_theme_mod("Valknut-Design-callout-person2-name");?></h4>
                        <h5 class="aqua italics off-center"><?php echo get_theme_mod("Valknut-Design-callout-person2-role");?></h5><br>
                        <h6 class="robot"><?php echo get_theme_mod("Valknut-Design-callout-person2-description");?></h6>
                    </span>
                    </div>
                    <div class="show-people">
                    <object class="we-are-team-svg-small-mobile lowest-index" class="svg-we-are-team" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/We-are-a-team-mobile-3.svg"></object>

                    <div class="signature highest-index">
            <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 603.39 226.09"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1">
<path id="hendrik-signature1" d="M285,222.26,305.55,210l10.21-6.19,5.1-3.11,5.06-3.16L331,194.4l5.05-3.2,10.09-6.4c6.72-4.28,13.45-8.58,20.31-12.71-6.14,5.14-12.5,10-19,14.65-3.23,2.35-6.55,4.59-9.85,6.84s-6.7,4.38-10.08,6.52-6.84,4.17-10.3,6.17-7,3.94-10.52,5.78C299.6,215.78,292.38,219.24,285,222.26Z" />
<path id="hendrik-signature2" d="M445.57,23.87C395.33,72.42,323,165.67,285,222.26" />
<path id="hendrik-signature3" d="M121.22,1.83C264.51-8.41,21.66,225.13,1.55,219.11c-1.12-4.5,15.75-22,34.64-34.64,78.2-52.13,212.66-129.74,236.18-173.2C182.72,48.43,55.09,231.71,86.58,219.11c22-9.45,26.41-10.67,37.79-22,15.74-15.75,0-12.6-9.45-3.15-15.75,18.89-3.15,25.19,6.3,22,6.92-1.73,15.74-9.45,22-22,2.56-5.13-3.15,6.3-12.6,25.19,12.6-18.89,9.45-15.75,25.2-25.19,15.74-3.15-8.32,26.19-6.3,25.19,14.23-7-6.85,1.14,66.13-44.09-12.6,9.45-48.76,23.23-44.09,44.09,5,22.51,171.82-165.63,207.84-204.69C322.3,47.67,245.27,132.32,215.69,175c-4.2,6.06-14.48,49.54-6.3,44.09,18.89-12.6,25.92-31.49,28.34-31.49,9.45,6.3,22-9.45,25.19-9.45,4.55-1.51-27.41,43.34-22,40.94,18.59-8.33,26.06-20.79,40.94-37.79-15.75,22-11.81,22-18.9,37.79C334.1,191.87,402.36,83.25,445.57,23.87,395.33,72.42,323,165.67,285,222.26c17.55-8.66,30.55-16.66,42.15-23.66" />
<path id="hendrik-signature4" d="M54.52,39.6c16-15,37-35,66.7-37.77" />
<path id="hendrik-signature5" d="M2.78,125.19A230.52,230.52,0,0,1,20.46,84,224,224,0,0,1,45.89,47c9.77-11.39,20.8-21.84,33.4-30.12a105.14,105.14,0,0,1,20-10.38c1.76-.66,3.56-1.23,5.35-1.8s3.6-1.06,5.45-1.39a60.67,60.67,0,0,1,11.13-1.43,75,75,0,0,0-21.37,6,112.89,112.89,0,0,0-19.24,11,154.74,154.74,0,0,0-17.16,14A192,192,0,0,0,48.17,48.9c-4.83,5.62-9.34,11.51-13.61,17.57S26.28,78.78,22.48,85.16s-7.28,13-10.55,19.64S5.64,118.3,2.78,125.19Z" />
<path id="hendrik-signature6" d="M322.52,201.6c2,8,3.2,9,4.2,11" />
<path id="hendrik-signature7" d="M322.52,201.6c.84,1.85,1.58,3.57,2.45,5.21a38.42,38.42,0,0,0,2.83,4.65c1,1.48,2.18,2.9,3.4,4.32s2.5,2.83,3.76,4.42a16.86,16.86,0,0,1-5.36-2.68,18.88,18.88,0,0,1-4.26-4.34,16.83,16.83,0,0,1-2.57-5.55A13.81,13.81,0,0,1,322.52,201.6Z" />
<path id="hendrik-signature8" d="M491.87,92.6c9.65-11,76.65-63,67.06-71.88-69.21,34.5-165.29,190-159.15,196.46,4.85,5.08,24.83-13.14,36.34-20.11,1.09,3.82-.09,23.61,3.15,25.19,9.35,1.57,42.25-19.66,102.25-91.66" />
<path id="hendrik-signature9" d="M439.64,222.26a8.8,8.8,0,0,0,3.7-.83,33.24,33.24,0,0,0,3.46-1.65c2.25-1.2,4.43-2.54,6.56-3.95,4.25-2.83,8.34-5.9,12.33-9.1,8-6.38,15.6-13.22,23-20.28s14.55-14.37,21.49-21.88,13.75-15.15,20.34-23,13.06-15.75,19.36-23.81,12.45-16.24,18.53-24.49,12-16.62,17.78-25,11.52-17,17.21-25.49Q587.94,69.37,570.3,94.67c-5.86,8.42-12,16.69-18.18,24.86s-12.71,16.15-19.33,24a494.77,494.77,0,0,1-42.51,44.61,299.56,299.56,0,0,1-23.7,19.73c-4.15,3.05-8.39,6-12.8,8.62a76.52,76.52,0,0,1-6.78,3.68,33.58,33.58,0,0,1-3.58,1.46A8.91,8.91,0,0,1,439.64,222.26Z" />
<path id="hendrik-signature10" d="M392.14,162.38a3,3,0,0,0,.31,3.34,4.75,4.75,0,0,0,2.83,1.9,6.38,6.38,0,0,0,3.39-.4,15.25,15.25,0,0,0,3.09-1.69c3.93-2.74,7.67-5.79,11.42-8.79,7.52-6,14.93-12.16,22.35-18.3s14.8-12.32,22.14-18.55,14.7-12.43,22-18.72,14.59-12.56,21.82-18.92S515.89,69.49,523,63,537.17,50,544,43.18c3.4-3.4,6.74-6.86,9.86-10.51a57.47,57.47,0,0,0,4.34-5.73,14.63,14.63,0,0,0,1.63-3.17A3.8,3.8,0,0,0,560,22a1.7,1.7,0,0,0-1.07-1.32A1.74,1.74,0,0,1,560.11,22a4,4,0,0,1-.12,1.83,14.6,14.6,0,0,1-1.46,3.34,55.6,55.6,0,0,1-4.1,6c-3,3.82-6.16,7.45-9.41,11-6.57,7.09-13.42,13.89-20.4,20.55-13.95,13.33-28.4,26.12-43,38.7S452.12,128.29,437,140.25c-7.56,6-15.18,11.9-22.92,17.65-3.91,2.84-7.78,5.7-11.89,8.29a15.88,15.88,0,0,1-3.31,1.62,6.79,6.79,0,0,1-3.71.25,5.12,5.12,0,0,1-2.91-2.22A3.16,3.16,0,0,1,392.14,162.38Z" />
<path id="hendrik-signature11" d="M483.35,223.26c3.86,0,3.87-6,0-6s-3.86,6,0,6Z"/>
<path id="hendrik-signature12" d="M289.52,176.6c3.86,0,3.86-6,0-6s-3.87,6,0,6Z"/></g></g>
</svg>
</div>
                    <img src="<?php echo get_theme_mod("Valknut-Design-callout-person3-image")?>" class="person-photo" alt="Designer">
                    <span class="caption">
                    <h4 class="bold off-center"><?php echo get_theme_mod("Valknut-Design-callout-person3-name");?></h4>
                        <h5 class="aqua italics off-center"><?php echo get_theme_mod("Valknut-Design-callout-person3-role");?></h5><br>
                        <h6 class="robot"><?php echo get_theme_mod("Valknut-Design-callout-person3-description");?></h6>
                    </span>
                    
                    </div>

            </div>
    </div>
    </main>
    <div class="Our-Process-wrapper section hamburgerchange" id="security" data-color="#fff">
    <object class="Our-Process lowest-index" class="svg-we-are-team" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svg-animations/Our-Process-BG.svg"></object>
    <object style="position: absolute;width: 500px;height: 100%;right: 0;" class="Development-Process lowest-index" class="svg-we-are-team" type="image/svg+xml" data="wp-content/themes/valknut-design/assets/svgs/Development-Process.png"></object>

        <div class="Our-Process-Wrapper-Two">
        <h1 class="bold" style="text-align: center;">Our <span class="aqua">Process</span></h1>
        
        <div class="redbox Our-Process-Text">
            <h6 class="thin"><?php echo get_theme_mod("Valknut-Design-callout-section-Our-Process");?></h6>
        </div>
        </div>

    </div>
    <footer class="">
    <div class="section" id="bottom-section">
        <h2 class="we-are-a-team center highest-index" id="we-are-a-team">Contact</h2>
        <div class="contact-container highest-index ">
            <div class="contact-box redbox">
                
                <form class="form" action="https://getform.io/f/31a8218f-b87b-4cef-93cb-7b3b476fdf0f" method="post">
                    <input name="name" type="text" class="required" id="name" placeholder="Your Name" required>
                    <input name="email "type="email" class="required" id="email" placeholder="Email"><br>
                    <input name="company" type="text" id="company-name" placeholder="Company Name">
                    <input name="phone" type="number" id="phone-number" placeholder="Phone number"><br>
                    <textarea name="project" class="required" placeholder="Tell us about your project" id="project-info"></textarea><br>
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