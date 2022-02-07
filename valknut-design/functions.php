<?php

// Get image from post content
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = "/path/to/default.png";
    }
    return $first_img;
  }

// Enqueue all the styles on the site
function valknutDesign_register_styles() {
    wp_enqueue_style("valknutdesign-main", get_template_directory_uri() . "/style.css", array(), "1.0", "all");
    wp_enqueue_style("valknutdesign-main-mobile", get_template_directory_uri() . "/mobilestyle.css", array(), "1.0", "all");
    wp_enqueue_style("valknutdesign-main-animation", get_template_directory_uri() . "/animations.css", array(), "1.0", "all");
}

// Enqueue all javascript files on the site
function valknutDesign_register_scripts() {
    wp_enqueue_scripts("valknutdesign-main", get_template_directory_uri() . "/js/main.js", array(), "1.0", "all");
}

add_action("wp_enqueue_scripts", "valknutDesign_register_styles");

// Add Customizability sections

function valknutDesign_people_callout($wp_customize) {

    $wp_customize->add_section("Valknut-Design-callout-section", array(
        "title" => "People"
    ));

    // Add customizability for person 1

    $wp_customize->add_setting("Valknut-Design-callout-person1-name", array(
        "default" => "Mads Hermansen"
    ));

    $wp_customize->add_setting("Valknut-Design-callout-person1-role", array(
        "default" => "Programmer"
    ));

    $wp_customize->add_setting("Valknut-Design-callout-person1-description", array(
        "default" => "Whatever your technical desire may be, Mads will find a solution and implement it. He takes in new information like a sponge and filters it like a... well, like a 33 micron H13 grade filter! This NTNU computer science student started programming at 14 and is a cornerstone of our team."
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-1-name", array(
        "label" => "Person 1 name",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person1-name"
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-1-role", array(
        "label" => "Person 1 role",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person1-role"
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-1-description", array(
        "label" => "Person 1 description",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person1-description",
        "type" => "textarea"
    )));

    $wp_customize->add_setting("Valknut-Design-callout-person1-image", array(
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "Frontpage-person-1-image", array(
        "label" => "Person 1 Image",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person1-image",
    )));

    // Person 2
    $wp_customize->add_setting("Valknut-Design-callout-person2-name", array(
        "default" => "Folke Hermansen"
    ));

    $wp_customize->add_setting("Valknut-Design-callout-person2-role", array(
        "default" => "Benevolent (?) Dictator"
    ));

    $wp_customize->add_setting("Valknut-Design-callout-person2-description", array(
        "default" => "With a background in economics and business Folke leads the Valknut team to deliver the highest standard onevery project we undertake. Folke is a project associate at MS-Solutions, CEO of Earendil Capital and is a board member in Herfo Finans and Fyrholmen AS."
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-2-name", array(
        "label" => "Person 2 name",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person2-name"
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-2-role", array(
        "label" => "Person 2 role",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person2-role"
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-2-description", array(
        "label" => "Person 2 description",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person2-description",
        "type" => "textarea"
    )));

    $wp_customize->add_setting("Valknut-Design-callout-person2-image", array(
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "Frontpage-person-2-image", array(
        "label" => "Person 2 Image",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person2-image",
    )));

    // Person 3
    $wp_customize->add_setting("Valknut-Design-callout-person3-name", array(
        "default" => "Hendrik Weiss"
    ));

    $wp_customize->add_setting("Valknut-Design-callout-person3-role", array(
        "default" => "Designer"
    ));

    $wp_customize->add_setting("Valknut-Design-callout-person3-description", array(
        "default" => "Biology student by day, and web-designer by night. Hendrik firstly works closely with Folke and Clients to craft the web design exactly as intended. He then cooperates with Mads to create animations & build the codebase, bringing your website to life. Sturdy and steadfast, Hendrik gets the job done."
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-3-name", array(
        "label" => "Person 3 name",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person3-name"
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-3-role", array(
        "label" => "Person 3 role",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person3-role"
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-3-description", array(
        "label" => "Person 3 description",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person3-description",
        "type" => "textarea"
    )));

    $wp_customize->add_setting("Valknut-Design-callout-person3-image", array(
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "Frontpage-person-3-image", array(
        "label" => "Person 3 Image",
        "section" => "Valknut-Design-callout-section",
        "settings" => "Valknut-Design-callout-person3-image"
    )));

    // logo 
    $wp_customize->add_section("Valknut-Design-callout-section-logo", array(
        "title" => "Logo"
    ));

    $wp_customize->add_setting("Valknut-Design-callout-logo-image", array(
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "Valknut-Design-callout-logo", array(
        "label" => "Add logo",
        "section" => "Valknut-Design-callout-section-logo",
        "settings" => "Valknut-Design-callout-logo-image",
        'extensions' => array( 'jpg', 'jpeg', 'gif', 'png', 'svg' )
    )));


    // Do websites Matter customization

    $wp_customize ->add_section("Valknut-Design-callout-section-do-websites-matter", array(
        "title" => "Do Websites Matter?"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-What-Does-It-Mean-1", array(
        "default" => "Slow loading sites result in massive <span class='red'>loss</span> of revenue"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-What-Does-It-Mean-2", array(
        "default" => "Making your website 1 second <span class='red'>faster</span> will increase <span class='red'>conversions</span> by 7%"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-What-Does-It-Mean-3", array(
        "default" => "$1 invested in user experience <span class='red'>returns</span> $100"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-What-Does-It-Mean-4", array(
        "default" => "<span class='red'>Search engine optimisation</span>"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Customer-Retention-1", array(
        "default" => "<span class='red'>89</span>% of people will <span class='aqua'>switch to a competitor</span> if they have a poor user experience"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Customer-Retention-2", array(
        "default" => "<span class='red'>88</span>% of users are <span class='aqua'>less likely to return</span> after a bad experience"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Customer-Retention-3", array(
        "default" => "<span class='red'>57</span>% of internet users <span class='aqua'>won't recommend a business</span> with a poorly designed mobile site"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Customer-Retention-4", array(
        "default" => "<span class='red'>50</span>% of web traffic is mobile. A <span class='aqua'>good mobile site</span> is crucial"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Customer-Retention-5", array(
        "default" => "<span class='red'>53</span>% of users will <span class='aqua'>abandon a page</span> taking more than 3 seconds to load"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Customer-Retention-6", array(
        "default" => "<span class='red'>40</span>% of users <span class='aqua'>stop interacting</span> if images don't load"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Security-1", array(
        "default" => "<span class='red'>89</span>% of people will <span class='aqua'>switch to a competitor</span> if they have a poor user experience"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Security-2", array(
        "default" => "<span class='red'>88</span>% of users are <span class='aqua'>less likely to return</span> after a bad experience"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Security-3", array(
        "default" => "<span class='red'>57</span>% of internet users <span class='aqua'>won't recommend a business</span> with a poorly designed mobile site"
    ));
    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Security-4", array(
        "default" => "<span class='red'>50</span>% of web traffic is mobile. A <span class='aqua'>good mobile site</span> is crucial"
    ));

    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-First-Impressions", array(
        "default" => "We've all heard that first impressions matter - and here are the facts to show it"
    ));

    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-First-Impressions-2", array(
        "default" => "It takes <span class='aqua'>50</span>ms (0.05s) for users to form an opinion about your website"
    ));

    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-First-Impressions-3", array(
        "default" => "<span class='aqua'>88</span>% of consumers who search for a business on a mobile device go to call that business within 24 hours."
    ));

    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-First-Impressions-4", array(
        "default" => "<span class='aqua'>83</span>% of people expect a website to load in three seconds or less"
    ));

    $wp_customize ->add_control(new WP_Customize_Control($wp_customize, "Valknut-Design-Impactful-Impressions", array(
        "label" => "Impact First Impressions !!",
        "section" => "Valknut-Design-callout-section-do-websites-matter",
        "settings" => "Valknut-Design-callout-Impactful-First-Impressions"
    )));

    $wp_customize ->add_control(new WP_Customize_Control($wp_customize, "Valknut-Design-Impactful-Impressions", array(
        "label" => "Impact First Impressions 1",
        "section" => "Valknut-Design-callout-section-do-websites-matter",
        "settings" => "Valknut-Design-callout-Impactful-First-Impressions-1"

    )));

    $wp_customize ->add_control(new WP_Customize_Control($wp_customize, "Valknut-Design-Impactful-Impressions", array(
        "label" => "Impact First Impressions 2",
        "section" => "Valknut-Design-callout-section-do-websites-matter",
        "settings" => "Valknut-Design-callout-Impactful-First-Impressions-2"

    )));

    $wp_customize ->add_control(new WP_Customize_Control($wp_customize, "Valknut-Design-Impactful-Impressions", array(
        "label" => "Impact First Impressions 3",
        "section" => "Valknut-Design-callout-section-do-websites-matter",
        "settings" => "Valknut-Design-callout-Impactful-First-Impressions-3"

    )));

    $wp_customize ->add_control(new WP_Customize_Control($wp_customize, "Valknut-Design-Impactful-Impressions", array(
        "label" => "Impact First Impressions 4",
        "section" => "Valknut-Design-callout-section-do-websites-matter",
        "settings" => "Valknut-Design-callout-Impactful-First-Impressions-4"

    )));

    $wp_customize ->add_setting("Valknut-Design-callout-Impactful-Better-Branding", array(
        "default" => "<span class='red'>75</span>% of website credibility comes from design - <span class='aqua'>important</span> in an age with <span class='red'>declining</span> <span class='aqua'>trust</span> and <span class='red'>increasing</span> numbers of and sophisticated <span class='aqua'>scam attempts</span>"
    ));


    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "Frontpage-person-3-description", array(
        "label" => "Better Branding",
        "section" => "Valknut-Design-callout-section-do-websites-matter",
        "settings" => "Valknut-Design-callout-Impactful-Better-Branding",
        "type" => "textarea"
    )));
}

add_action("customize_register", "valknutDesign_people_callout")



?>