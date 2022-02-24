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
                <style>
    .menu li a{
        color: white;
}

    .hamburgernav span {
        background: white;
    }
</style>
                    <!-- <img src="<?php echo get_theme_mod("Valknut-Design-callout-logo-image")?>" class="logo"> -->
                    <h1 class="logo-title robot">Valknut Design</h1>
                </div>
                <ul class="menu nav navbar-right">
                    <li>
                    <a href="<?php echo home_url(); ?>" class="bold">HOME</a>
                    </li>
                    <li>
                        <a href="Do-websites-matter" class="bold">DO WEBSITES MATTER?</a>
                    </li>
                    <li>
                        <a href="get-a-website" class="red bold">GET A WEBSITE</a>
                    </li>
                    <li>
                        <a href="portfolio" class="bold">PORTFOLIO</a>
                    </li>
                </ul>
            </div>

        </nav>
        <div id="nav-mobile">

        </div>
        <div id="nav-mobile-close">

</div>
            <div class="hamburgernav" id="hamburgernav">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <ul id="mobilenavlist">
                    <li>
                    <a href="<?php echo home_url(); ?>" class="red bold">HOME</a>
                    </li>
                    <li>
                        <a href="Do-websites-matter" class="red">DO WEBSITES MATTER?</a>
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



        </div>
        <div id="introsurvey">
        <div class="questionaire-text-area">
            <h1 class="superbold">Get a <span class="aqua">price</span> estimate</h1>
            <button class="take-survey moreinfo-button linear-red-aqua" id="surveystart" onclick="startsurvey()">Take the Survey</button>   
            <h2 class="bold">We're Ready For Your <span class="aqua">new Website</span><br><span class="red">Are You?</span></h2>
        </div>
        <object class="svgtop-questionaire lowest-index" type="image/svg+xml" data="../wp-content/themes/valknut-design/assets/svg-animations/svgbottom.svg"></object>
        </div> 
        <div class="svg-questionaire-wrapper lowest-index" id="svgtop-questionaire">
        </div>
        <!-- Questions -->
        <div id="back-button">
            <button class="robot" id="back" onclick="questionback()" disabled>&leftarrow; Back</button>
        </div>

        <div id="front-button">
            <button class="robot" id="front" onclick="startsurvey()" disabled>Next &rightarrow;</button>
        </div>
        <div class="completed-forms">
            <output class="aqua robot font-thirty" id="completed-amount"></output>
        </div>
        <div class="surveyblock" id="surveyblock1">
            <h1 class="robot">Do you already have a website?</h1>
            <input type="radio" id="yes-website" name="have-website" value="have-website" onclick="startsurvey()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="no-website" name="have-website" value="no-website" onclick="startsurvey()">
            <label for="no-website">No</label>
        </div>
        <div class="surveyblock" id="surveyblock2">
            <h1 class="robot">Would you like to build a brand new website, or improve upon an existing one</h1>
            <input type="radio" id="build-website" name="improve" value="build-website" onclick="startsurvey()">
            <label for="build-website">Build a new website</label><br>
            <input type="radio" id="improve-website" name="improve" value="improve-website" onclick="startsurvey()">
            <label for="improve-website">Improve an existing one</label>
        </div>
        <div class="surveyblock" id="surveyblock3">
            <h1 class="robot">What is the goal and purpose of your website</h1>
            <input type="radio" id="placeholder1" name="goal" value="build-website" onclick="startsurvey()">
            <label for="placeholder1">Build a new website</label><br>
            <input type="radio" id="placeholder2" name="goal" value="improve-website" onclick="startsurvey()">
            <label for="placeholder2">Improve an existing one</label>
        </div>
        <div class="surveyblock" id="surveyblock4">
            <h1 class="robot">How many pages do you expect your website to have?</h1>
            <input type="range" id="page-count" name="page-count" min="1" max="10" step="1" value="3"
            oninput="this.nextElementSibling.value = this.value;changecolor()">
            <output>3</output>
        </div>
        <div class="surveyblock" id="surveyblock5">
            <h1 class="robot">How much custom artwork do you need? (photos & other graphics)</h1>
            <input type="radio" id="low-art" name="artwork" value="a-little" onclick="startsurvey()">
            <label for="low-art">A little</label><br>
            <input type="radio" id="mid-art" name="artwork" value="Medium" onclick="startsurvey()">
            <label for="mid-art">Medium</label><br>
            <input type="radio" id="high-art" name="artwork" value="A lot" onclick="startsurvey()">
            <label for="high-art">A lot</label>
        </div>
        <div class="surveyblock" id="surveyblock6">
            <h1 class="robot">Do you need us to develop a brand kit? (this includes  typography, colour palette, visual profile & logo)</h1>
            <input type="radio" id="brand-kit-yes" name="brand-kit" value="yes-brand" onclick="startsurvey()">
            <label for="brand-kit-yes">Yes</label><br>
            <input type="radio" id="brand-kit-no" name="brand-kit" value="no-brand" onclick="startsurvey()">
            <label for="brand-kit-no">No</label>
        </div>
        <div class="surveyblock" id="surveyblock7">
            <h1 class="robot">How many custom animations would you like on the website?</h1>
            <input type="radio" id="low-animation" name="animations" value="a-little" onclick="startsurvey()">
            <label for="low-animation">A little</label><br>
            <input type="radio" id="mid-animation" name="animations" value="Medium" onclick="startsurvey()">
            <label for="mid-animation">Medium</label><br>
            <input type="radio" id="high-animation" name="animations" value="A lot" onclick="startsurvey()">
            <label for="high-animation">A lot</label>
        </div>
        <div class="surveyblock" id="surveyblock8">
            <h1 class="robot">Do you want advanced SEO? (Search Engine Optimization)</h1>
            <input type="radio" id="seo-yes" name="SEO" value="yes-seo" onclick="startsurvey()">
            <label for="seo-yes">Yes</label><br>
            <input type="radio" id="seo-no" name="SEO" value="no-seo" onclick="startsurvey()">
            <label for="seo-no">No</label>
        </div>
        <div class="surveyblock" id="surveyblock9">
            <h1 class="robot">Would you like us to create text content?</h1>
            <input type="radio" id="text-yes" name="text-content" value="text-yes" onclick="startsurvey()">
            <label for="text-yes">Yes</label><br>
            <input type="radio" id="text-no" name="text-content" value="text-no" onclick="startsurvey()">
            <label for="text-no">No</label>
        </div>
        <div class="surveyblock" id="surveyblock10">
            <h1 class="robot">Do you need a user login system?</h1>
            <input type="radio" id="user-yes" name="user-login" value="user-yes" onclick="startsurvey()">
            <label for="user-yes">Yes</label><br>
            <input type="radio" id="user-no" name="user-login" value="user-no" onclick="startsurvey()">
            <label for="user-no">No</label>
        </div>
        <div class="surveyblock" id="surveyblock11">
            <h1 class="robot">Do you need a database and information processing system?</h1>
            <input type="radio" id="database-yes" name="database-processing" value="database-yes" onclick="startsurvey()">
            <label for="database-yes">Yes</label><br>
            <input type="radio" id="database-no" name="database-processing" value="database-no" onclick="startsurvey()">
            <label for="database-no">No</label>
        </div>
        <div class="surveyblock" id="surveyblock12">
            <h1 class="robot">Do you need additional security features?</h1>
            <input type="radio" id="security-yes" name="security-features" value="security-yes" onclick="startsurvey()">
            <label for="security-yes">Yes</label><br>
            <input type="radio" id="security-no" name="security-features" value="security-no" onclick="startsurvey()">
            <label for="security-no">No</label>
        </div>
        <div class="surveyblock" id="surveyblock13">
            <h1 class="robot">Are there any websites you like, which can serve as inspiration?</h1>
            <input type="radio" id="liked-websites" name="website-inspiration" value="security-yes" onclick="startsurvey()">
            <label for="liked-websites">Yes</label><br>
            <input type="radio" id="no-liked-websites" name="website-inspiration" value="security-no" onclick="startsurvey()">
            <label for="no-liked-websites">No</label>
        </div>
        <div class="surveyblock" id="surveyblock14">
            <h1 class="robot">What is your budget range?</h1>
            <input placeholder="Enter a value"type="text" id="budget" name="budget" value="">
        </div> 
        <div class="surveyblock" id="surveyblock15">
            
            <h1 class="robot">When would you like to launch your site? </h1>
            <input type="radio" id="launch" name="website-launch" value="week" onclick="priceEstimate()">
            <label for="launch">A week</label><br>
            <input type="radio" id="launch" name="website-launch" value="month" onclick="priceEstimate()">
            <label for="launch">A month</label><br>
            <input type="radio" id="launch" name="website-launch" value="year" onclick="priceEstimate()">
            <label for="launch">A year</label><br>
        </div>
        
        <div class="surveyblock" id="surveyblock16">
        <h1 class="superbold">Get your <span class="aqua">price</span> estimate!</h1>
        <h2 class="robot">Please leave your email & we will get back to you</h1>
            <form class="Get-info-contact" action="https://getform.io/f/31a8218f-b87b-4cef-93cb-7b3b476fdf0f" method="post">
                
                <input name="name" type="text" class="required" id="name" placeholder="Your Name" required>
                    <input name="email "type="email" class="required" id="email" placeholder="Email"><br>
                    <input name="company" type="text" id="company-name" placeholder="Company Name">
                    <input name="phone" type="number" id="phone-number" placeholder="Phone number"><br>
                    <textarea rows="4" name="project" class="required" placeholder="Tell us about your project" id="project-info"></textarea><br>
                    <button type="submit" class="send moreinfo-button linear-red-aqua" style="left:auto" onclick="saveandsend()">SEND</button>
            </form>
        </div>
</header>

    <script src="../wp-content/themes/valknut-design/survey.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

    <?php
    // Uses this to import the styles
    wp_footer();
    ?>

</html>