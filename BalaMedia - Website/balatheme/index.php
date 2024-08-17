<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the two required files for a theme (the other being style.css).
 *
 * @package Your_Theme_Name
 */

get_header();
?>

<!-- Content Page Piling -->
<div class="pagepiling">

    <!-- Section Home -->
    <div class="pp-scrollable scrollable-home text-white section" id="main">
        <div class="scroll-wrap">
            <div class="section-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/balatheme/resources/assets/home/background_home.jpg');"></div>
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div class="vertical-title hidden-xs hidden-sm"><span></span></div>
                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <h1>Inspired by&nbsp;<span class="typewriter"></span></h1>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-6">
                                            <p class="subtitle-top"><br></p>
                                            <h1 class="display-1 text-white"><span class="text-primary"></span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section About -->
    <div class="pp-scrollable scrollable-about section" id="about">
        <div class="scroll-wrap">
            <div class="scrollable-content" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/balatheme/resources/assets/about/space.jpg'); background-size: 100%;">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-5">
                                            <h1 class="aboutus-page">About us</h1>
                                            <p class="aboutus-page_paragraph">We welcome you into the world of Bala Media, where simplicity stands as the cornerstone of creativity, and narratives are woven with an elegant ease, nestled within the bustling embrace of Addis Ababa.</p>
                                            <br>
                                            <p class="aboutus-page_paragraph">We are a sanctuary for the elegance found in minimalistic brilliance. Our journey is one guided by the beacon of clarity, driven by a vision to unravel complexities and allow the true essence of every story to radiate.</p>
                                            <br>
                                            <p class="aboutus-page_paragraph">Specializing in the art of Content Creation, the finesse of Social Media Management, and the magnetic allure of Content Marketing, we boldly embark on a mission to infuse simplicity into every aspect of our endeavors.</p>
                                        </div>
                                        <div class="col-md-6 col-lg-5 col-md-offset-1 col-lg-offset-2">
                                            <div class="dots-image-2">
                                                <div class="dots"></div>
                                                <div class="experience-info"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Mission -->
    <div class="pp-scrollable scrollable-about section" id="projects">
        <div class="scroll-wrap">
            <div class="scrollable-content" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/balatheme/resources/assets/mission/missionback.jpg'); background-size: 100%;">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-5">
                                            <h1 class="aboutus-page">Mission</h1>
                                            <p class="mission_paragraph">At Bala Media, our mission is to infuse the spirit of minimalist design into every narrative we create. We believe within the simplicity of expression, lies the power to captivate and resonate.</p>
                                            <p class="mission_paragraph">Our goal is to strip away the unnecessary, distilling ideas to their core essence, and presenting them with an elegant clarity.</p>
                                        </div>
                                        <div class="col-md-6 col-lg-5 col-md-offset-1 col-lg-offset-2">
                                            <div class="dots-image-2">
                                                <div class="dots"></div>
                                                <div class="experience-info"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Projects -->
    <div class="pp-scrollable scrollable-projects text-white section" id="partners">
        <div class="scroll-wrap">
            <div class="bg-changer">
                <div class="section-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/balatheme/resources/assets/services/servicesback.jpg'); background-size: 100%;"></div>
            </div>
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="title-uppercase text-white">Services</h2>
                                            <div class="row-project-box row">
                                                <!-- Repeat this block for each project item -->
                                                <div class="col-project-box col-sm-6 col-md-4 col-lg-3">
                                                    <a href="#project1" class="project-box popup-with-zoom-anim">
                                                        <div class="project-box-inner">
                                                            <h5>Branding</h5>
                                                        </div>
                                                    </a>
                                                    <div id="project1" class="container zoom-anim-dialog mfp-hide">
                                                        <div class="services-container">
                                                            <!-- Repeat this block for each service item -->
                                                            <div class="branding-service">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/balatheme/images/partners/7.png" alt="Branding Logo 1" class="service-logo">
                                                                <button onclick="window.open('<?php echo get_stylesheet_directory_uri(); ?>/balatheme/Services/Branding/1. Ahaz Solutions I Branding.pdf', '_blank')">See More</button>
                                                            </div>
                                                            <!-- End repeat block -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End repeat block -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Clients & Partners -->
    <div class="pp-scrollable scrollable-partners section" id="testimonials">
        <div class="scroll-wrap">
            <div class="scrollable-content" style="background-color:#ffff;">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div class="boxed">
                            <div class="container">
                                <div class="intro overflow-hidden">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="title-uppercase text-black">Clients & Partners</h2>
                                            <div class="row-partners">
                                                <!-- Repeat this block for each partner item -->
                                                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/balatheme/images/partners/1.png" alt=""></div>
                                                <!-- End repeat block -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Contacts -->
    <div class="pp-scrollable scrollable-contacts section" id="contacts">
        <div class="scroll-wrap">
            <div class="scrollable-content" style="background-color:#B3DCE0;">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div class="boxed">
                            <div class="container">
                                <div class="intro overflow-hidden">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="title-uppercase">Let's get started!</h2>
                                            <div id="map" class="map-2"></div>
                                            <div class="contact-info">
                                                <div class="row-contact-info row">
                                                    <div class="col-contact-info col-md-6 col-lg-4">
                                                        <div class="row">
                                                            <h3 class="col-sm-3 col-md-4">Write us</h3>
                                                            <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                                                <div class="contact-info-row col-sm-6 col-md-12">
                                                                    <strong class="text-white">head office</strong><br>
                                                                    contact@bala.media
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-contact-info col-md-6 col-lg-4">
                                                        <div class="row">
                                                            <h3 class="col-sm-3 col-md-4">call us</h3>
                                                            <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                                                <div class="contact-info-row col-sm-6 col-md-12">
                                                                    <strong class="text-white">head office</strong><br>
                                                                    (+251) 977716161
                                                                </div>
                                                                <div class="contact-info-row col-sm-6 col-md-12 ">
                                                                    <strong class="text-white">support</strong><br>
                                                                    (+251) 913894535
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-contact-info col-md-6 col-lg-4">
                                                        <div class="row">
                                                            <h3 class="col-sm-3 col-md-4">Visit us</h3>
                                                            <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                                                <div class="contact-info-row col-sm-6 col-md-12">
                                                                    Eden Building, 3rd Floor, Addis Ababa, Ethiopia.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>