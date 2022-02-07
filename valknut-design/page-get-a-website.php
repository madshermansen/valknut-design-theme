<?php
get_header();
?>

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
        <div class="back-button">
            <button class="robot" id="back" onclick="questionback()">&leftarrow; Back</button>
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
            <label for="yes-website">Build a new website</label><br>
            <input type="radio" id="improve-website" name="improve" value="improve-website" onclick="startsurvey()">
            <label for="no-website">Improve an existing one</label>
        </div>
        <div class="surveyblock" id="surveyblock3">
            <h1 class="robot">What is the goal and purpose of your website</h1>
            <input type="radio" id="build-website" name="improve" value="build-website" onclick="startsurvey()">
            <label for="yes-website">Build a new website</label><br>
            <input type="radio" id="improve-website" name="improve" value="improve-website" onclick="startsurvey()">
            <label for="no-website">Improve an existing one</label>
        </div>
        <div class="surveyblock" id="surveyblock4">
            <h1 class="robot">How many pages do you expect your website to have?</h1>
            <input type="range" id="page-count" name="page-count" min="1" max="10" step="1" onchange="startsurvey()"
            oninput="this.nextElementSibling.value = this.value">
            <output>6</output>
        </div>
        <div class="surveyblock" id="surveyblock5">
            <h1 class="robot">How much custom artwork do you need? (photos & other graphics)</h1>
            <input type="radio" id="low-art" name="artwork" value="a-little" onclick="startsurvey()">
            <label for="yes-website">A little</label><br>
            <input type="radio" id="mid-art" name="artwork" value="Medium" onclick="startsurvey()">
            <label for="no-website">Medium</label><br>
            <input type="radio" id="high-art" name="artwork" value="A lot" onclick="startsurvey()">
            <label for="no-website">A lot</label>
        </div>
        <div class="surveyblock" id="surveyblock6">
            <h1 class="robot">Do you need us to develop a brand kit? (this includes  typography, colour palette, visual profile & logo)</h1>
            <input type="radio" id="brand-kit-yes" name="brand-kit" value="yes-brand" onclick="startsurvey()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="brand-kit-no" name="brand-kit" value="no-brand" onclick="startsurvey()">
            <label for="no-website">No</label>
        </div>
        <div class="surveyblock" id="surveyblock7">
            <h1 class="robot">How many custom animations would you like on the website?</h1>
            <input type="radio" id="low-animation" name="animations" value="a-little" onclick="startsurvey()">
            <label for="yes-website">A little</label><br>
            <input type="radio" id="mid-animation" name="animations" value="Medium" onclick="startsurvey()">
            <label for="no-website">Medium</label><br>
            <input type="radio" id="high-animation" name="animations" value="A lot" onclick="startsurvey()">
            <label for="no-website">A lot</label>
        </div>
        <div class="surveyblock" id="surveyblock8">
            <h1 class="robot">Do you want advanced SEO? (Search Engine Optimization)</h1>
            <input type="radio" id="seo-yes" name="SEO" value="yes-seo" onclick="startsurvey()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="seo-no" name="SEO" value="no-seo" onclick="startsurvey()">
            <label for="no-website">No</label>
        </div>
        <div class="surveyblock" id="surveyblock9">
            <h1 class="robot">Would you like us to create text content?</h1>
            <input type="radio" id="text-yes" name="text-content" value="text-yes" onclick="startsurvey()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="text-no" name="text-content" value="text-no" onclick="startsurvey()">
            <label for="no-website">No</label>
        </div>
        <div class="surveyblock" id="surveyblock10">
            <h1 class="robot">Do you need a user login system?</h1>
            <input type="radio" id="user-yes" name="user-login" value="user-yes" onclick="startsurvey()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="user-no" name="user-login" value="user-no" onclick="startsurvey()">
            <label for="no-website">No</label>
        </div>
        <div class="surveyblock" id="surveyblock11">
            <h1 class="robot">Do you need a database and information processing system?</h1>
            <input type="radio" id="database-yes" name="database-processing" value="database-yes" onclick="startsurvey()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="database-no" name="database-processing" value="database-no" onclick="startsurvey()">
            <label for="no-website">No</label>
        </div>
        <div class="surveyblock" id="surveyblock12">
            <h1 class="robot">Do you need additional security features?</h1>
            <input type="radio" id="security-yes" name="security-features" value="security-yes" onclick="startsurvey()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="security-no" name="security-features" value="security-no" onclick="startsurvey()">
            <label for="no-website">No</label>
        </div>
        <div class="surveyblock" id="surveyblock13">
            <h1 class="robot">Are there any websites you like, which can serve as inspiration?</h1>
            <input type="radio" id="security-yes" name="security-features" value="security-yes" onclick="startsurvey()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="security-no" name="security-features" value="security-no" onclick="startsurvey()">
            <label for="no-website">No</label>
        </div>
        <div class="surveyblock" id="surveyblock14">
            <h1 class="robot">What is your budget range?</h1>
            <input placeholder="Enter a value"type="text" id="budget" name="budget" value="" onclick="startsurvey()">
        </div> 
        <div class="surveyblock" id="surveyblock15">
            <h1 class="robot">When would you like to launch your site? </h1>
            <input type="radio" id="security-yes" name="security-features" value="security-yes" onclick="priceEstimate()">
            <label for="yes-website">Yes</label><br>
            <input type="radio" id="security-no" name="security-features" value="security-no" onclick="priceEstimate()">
            <label for="no-website">No</label>
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
                    <button type="submit" class="send moreinfo-button linear-red-aqua">SEND</button>
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