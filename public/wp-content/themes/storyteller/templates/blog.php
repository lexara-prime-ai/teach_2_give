<?php

get_header();

/*
Template Name: Blog
*/
?>

<!-- HERO SECTION -->
<section class="home hero-section">
    <!-- VIDEO -->
    <video class="video-slide active" src=<?php echo get_theme_file_uri('/assets/videos/footage_1.mp4'); ?> autoplay muted loop></video>

    <!-- CONTENT -->
    <div class="content active">
        <!-- SLOGAN -->
        <h1 class="slogan">
            CHECK OUT OUR
            <br>
            <span>
                LATEST
                <span class="green">
                    STORIES
                </span>
            </span>
        </h1>

        <!-- INFO -->
        <p class="info" data-aos="fade-right" data-aos-delay="300">
            "Fostering success, one story at a time."
        </p>
    </div>

    <!-- SOCIAL MEDIA -->
    <div class="social-media-icons" data-aos="fade-left" data-aos-delay="400">
        <!-- LINKS -->
        <a>
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a>
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a>
            <i class="fa-brands fa-google"></i>
        </a>
    </div>
</section>

<!-- BLOG SECTION -->
<section class="blog-section">
    <div class="blog-section-title">
        <h2 class="title">
            Our <span>Latest</span> Blog Posts
        </h2>

        <!-- CONETNT WRAPPER -->
        <div class="blog-content-wrapper">
            <!-- BLOG CARDS -->
            <div class="cards">
                <!-- CARD -->
                <div class="card active">
                    <div class="card-img-container">
                        <img src=<?php echo get_theme_file_uri('/assets/images/thumbnails/brian_orina.png') ?> alt="post" class="card-img">
                    </div>

                    <!-- CARD TEXT -->
                    <div class="card-text">
                        <!-- POST TITLE -->
                        <h2 class="post-title">
                            What is the importance of being a mentor?
                        </h2>

                        <!-- POST BODY -->
                        <p class="post-body">
                            Together, we can unlock the potential within each student.
                        </p>
                    </div>

                    <!-- BUTTON -->
                    <a href="" class="learn-more">
                        <button class="learn-more-btn">
                            Learn More
                        </button>
                    </a>

                </div>

                <!-- CARD -->
                <div class="card">
                    <div class="card-img-container">
                        <img src=<?php echo get_theme_file_uri('/assets/images/thumbnails/brian_orina.png') ?> alt="post" class="card-img">
                    </div>

                    <!-- CARD TEXT -->
                    <div class="card-text">
                        <!-- POST TITLE -->
                        <h2 class="post-title">
                            What is the importance of being a mentor?
                        </h2>

                        <!-- POST BODY -->
                        <p class="post-body">
                            Together, we can unlock the potential within each student.
                        </p>
                    </div>

                    <!-- BUTTON -->
                    <a href="" class="learn-more">
                        <button class="learn-more-btn">
                            Learn More
                        </button>
                    </a>

                </div>

            </div>

            <!-- SIDE CONTENT -->
            <div class="side-content">
                <!-- ARTICLE -->
                <div class="article">
                    <h2 class="article-title">
                        The <span>Power</span> of Mentorship
                    </h2>

                    <p class="article-content">
                        Mentorship plays a crucial role in shaping future leaders and professionals. It's an opportunity
                        to inspire, guide, and empower individuals to achieve their full potential. As mentors, we can
                        make a lasting impact on the lives of our mentees, fostering growth, and personal development.
                    </p>

                    <a href="#" class="read" title="read in under 3 minutes">
                        Read
                    </a>
                </div>

                <!-- ARTICLE -->
                <div class="article">
                    <h2 class="article-title">
                        Are you ready to make a difference as a <span>mentor</span>?
                    </h2>

                    <p class="article-content">
                        Are you ready to make a difference as a mentor? Join us on this fulfilling journey of growth and
                        transformation. Together, we can build a better world, one mentoring relationship at a time.

                        <em>“The best way to find yourself is to lose yourself in the service of others.” - Mahatma
                            Gandhi</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>




<!--==============-->
<!-- CONTACT FORM -->
<!--==============-->
<div class="contact-form sticky">
    <form action="#">
        <h2 class="form-title">
            Contact Us
        </h2>

        <input type="text" id="user-input" placeholder="Name...">
        <input type="email" id="user-input" placeholder="Email...">

        <textarea name="message" id="message" placeholder="Message..."></textarea>

        <!-- SUBMIT BUTTON -->
        <button class="submit-form-btn">
            Send Message
        </button>
    </form>
</div>





<?php get_footer(); ?>
