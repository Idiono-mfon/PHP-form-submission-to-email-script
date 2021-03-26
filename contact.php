<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $post = sanitize_html($_POST);
        if(!empty($post)){
            $message = contactMessage($post);
            $success = sendEmail('info@kiasisventures.com.ng','Kasisventures contact form',$message);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>KiasisVentures - Contact Us</title>
<?php require_once('styles.php');?>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

   <?php require_once('header.php');?>
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="far fa-times-circle"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="page-title" style="background-image: url(assets/images/background/bg-9.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Contact Us.</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="home">Home</a></li>
                        <li>get in touch</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="our-facts" style="background-image: url(assets/images/background/contact-bg.jpg);">
                            <div class="column counter-column">
                                <div class="border-none inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-outer">
                                        <!-- <div class="icon"><span class="icon-ambulance"></span></div> -->
                                    </div>
                                    <div class="count-outer count-box">
                                        <!-- <span class="count-text" data-speed="3000" data-stop="345">0</span> -->
                                    </div>
                                    <!-- <div class="text">For Any Type of <br> Medical Emergency </div> -->
                                </div>
                            </div>
                            <div class="column counter-column">
                                <div class="border-none inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-outer">
                                    </div>
                                    <div class="count-outer count-box">
                                    </div>
                                </div>
                            </div>
                            <div class="column counter-column">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-outer">
                                    </div>
                                    <div class="count-outer count-box">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-area">
                            <div class="sec-title mb-30">
                                <h2>Looking For Any Help <br> Or Have A Question</h2>
                            </div>
                            <div class="text mb-30">For your business needs, Connect with us today.</div>
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="contact.php" id="contact-form">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="name" value="" placeholder="Your Name" required>
                                        </div>                      
                                        <div class="form-group col-md-12">
                                            <input type="text" name="email" value="" placeholder="Your Email" required>
                                        </div>                        
                                        <div class="form-group col-md-12">
                                            <input type="text" name="subject" value="" placeholder="Subject" required>
                                        </div>                        
                                        <div class="form-group col-md-12">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>                        
                                        <div class="form-group col-md-12">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php require_once('footer.php');?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon-arrow"></span></div>
<?php require_once('scripts.php');?>

</body>

</html>













