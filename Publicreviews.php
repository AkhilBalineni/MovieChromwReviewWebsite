
<!DOCTYPE html>
<html lang="en">
<!-- /**
**/ -->
<head>
    <link rel="icon"  href="images/logo.png" type="image/x-icon">
    <title>PUBLIC REVIEWS</title>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-css -->
    <link rel="stylesheet" href="css/style3.css" type="text/css" media="all" />
    <!-- Style-css -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Font-Awesome-Icons-css -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Popup css (for Video Popup) -->
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all">
    <!-- Lightbox css (for Projects) -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- Flexslider css (for Testimonials) -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Economica:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Rasa:300,400,500,600,700" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
<div class="main-agile">
    <!-- banner -->
    <div class="agile-top">
        <div class="col-xs-4 logo">
            <h1>
                <a href="Main.php">
                    <span style="color:Red">M</span>ovie
                    <span style="color:Red">C</span>hrome
                    <span style="color:Red">R</span>eview
                </a>
            </h1>
        </div>
        <div class="col-xs-6 header-w3l">
            <ul>
                <li>
                    <a>
                        <span class="fa fa-home" aria-hidden="true" style="color:Red"></span><span style="color:red">Welcome</span></a>
                </li>
                <li>
                    <a href="Main.php">
                        <span class="fa fa-sign-out" aria-hidden="true" style="color:Red"></span><span style="color:red"> Sign Out</span> </a>
                </li>
            </ul>
        </div>
        <!-- navigation -->
        <div class="col-xs-2 menu">
            <a href="" id="menuToggle">
                <span class="navClosed"></span>
            </a>
            <nav>
                <a href="Publicreviews.php">Home</a>
                <a href="#yourreview" class="scroll">Give Your Review</a>
                <a href="#publicreview" class="scroll">Featured Public Reviews</a>
                <a href="#contact" class="scroll">Contact Us</a>
            </nav>
        </div>
        <!-- //navigation -->
    </div>
</div>

<!-- banner-text -->
<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides callbacks callbacks1" id="slider4">
            <li>
                <div class="w3layouts-banner-top banner">
                    <div class="container">
                        <div class="agileits-banner-info">
                            <h3><span style="color:Red">Give Your Reviews to the Movies</span></h3>
                            <p><span style="color:yellow"><b>Cinema</b></span>
                                <i class="fa fa-film" aria-hidden="true"></i><span style="color:yellow"> <b>is a matter of what's in the frame and what's out</b></span></p>
                            <div class="video-pop-wthree">
                                <div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
                                </div>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#about" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top banner-2">
                    <div class="container">
                        <div class="agileits-banner-info">
                            <h3><span style="color:yellow">Checkout all the featured Public Reviews</span></h3>
                            <p><span style="color:red"><b>Cinema</b></span>
                                <i class="fa fa-film" aria-hidden="true"></i><span style="color:red"> <b>is a matter of what's in the frame and what's out</b></span></p>
                            <div class="video-pop-wthree">
                                <div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
                                </div>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#about" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top banner-3">
                    <div class="container">
                        <div class="agileits-banner-info">
                            <h3><span style="color:Red">Public Reviews</span></h3>
                            <p><span style="color:yellow"><b>Cinema</b></span>
                                <i class="fa fa-film" aria-hidden="true"></i><span style="color:yellow"> <b>is a matter of what's in the frame and what's out</b></span></p>
                            <div class="video-pop-wthree">
                                <div id="small-dialog3" class="mfp-hide w3ls_small_dialog wthree_pop">
                                </div>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#about" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
    <!-- //banner-text -->

<!-- contact -->
<div class="contact" id="yourreview">
    <div class="title-div">
        <h3 class="tittle">
            <span style="color:Red">Y</span>our<span style="color:Red">  R</span>eview
        </h3>
        <div class="tittle-style">
        </div>
    </div>
</div>
<img src="images/Pbrev.webp" alt="" width="600" height="500" align="right">
<div class="second-contact-agile">
    <div class="col-md-6 form-bg">
        <form action="#" method="post">
            <div class="contact-fields">
                <input type="text" name="Name" placeholder="Name" required="">
            </div>
            <div class="contact-fields">
                <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="contact-fields">
                <input type="text" name="Mname" placeholder="Name Of The Movie" required="">
            </div>
            <div class="contact-fields">
                <input type="text" name="Rating" placeholder="Your rating out of 1-5 " required="">
            </div>
            <div class="contact-fields">
                <textarea name="Review" placeholder="Your Review" required=""></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
  </div>
    <div class="clearfix"></div>
</div>
<!-- //contact -->

<div class="contact" id="publicreview">
    <div class="title-div">
        <h3 class="tittle">
            <span style="color:Red">F</span>eatured<span style="color:Red">  P</span>ublic <span style="color:Red">  R</span>eviews
        </h3>
        <div class="tittle-style">
        </div>
    </div>
</div>
<div class="second-contact-agile">
  <ol>
    <h3>
    <span style="color:red">
      <p>
          <ol>
          <li><b> Movie Name :- Sherlock Holmes: A Game of Shadows Review  ,  Review by  :- Nabeel ali Baig </b></li>
          <ul>
         <li>............</li>
    <li>However, the point of the sacrifice wasn’t the immediate benefit. Making the hard choice to give up his queen gave Larsen the opening that he needed to win the larger game. In fact, if both players played their best moves from then on out, it was no longer possible for Petrosian to win the game at all..</li>
    <li><span style="color:green"><b>Movie Rating :- 3.5/5</b></span></li>
    <li>.............</li>
           </ul>

    <li> <b>Movie Name :-The Lord of the Rings: The Fellowship of the Ring  ,  Review by :- Ananth Dundi</b></li>
    <ul>
    <li>............</li>
    <li>The dwarves, along with Bilbo Baggins and Gandalf the Grey, continue their quest to reclaim Erebor, their homeland, from Smaug. Bilbo Baggins is in possession of a mysterious and magical ring.</li>
    <li><span style="color:green"><b>Movie Rating :- 4/5</b></span></li>
    <li>.............</li>
    </ul>

    <li> <b> Movie Name :-   Pirates of the Caribbean: On Stranger Tides  ,  Review by :- Manish Valeti</b></li>
    <ul>
    <li>............</li>
    <li>When Captain Jack Sparrow crosses paths with the enigmatic Angelica, he’s not sure if it’s love—or if she’s a ruthless con artist who’s using him to find the fabled Fountain of Youth. When she forces him aboard the "Queen Anne’s Revenge," the ship of the legendary pirate Blackbeard, Jack finds himself on an unexpected adventure in which he doesn’t know whom to fear more: Blackbeard or Angelica, with whom he shares a mysterious past.

    </li>
    <li><span style="color:green"><b>Movie Rating :- 3.5/5</b></span></li>
    <li>.............</li>
    </ul>

    <li> <b>Movie Name :-   Diary of a Wimpy Kid  ,  Review by :- Siddesh</b></li>
    <ul>
    <li>............</li>
    <li>This
    novel revolves around the boy named Greg Heffely where he talks about his lifein his journal which has the word diary written on it which is not very much
    appreciated by Greg though in this he talks about daily incidents and all the interesting things happening in his life and the way the author Jeff Kinney
    describes his daily life is a delight for readers for all ages even though it’s a children literature classic it’s widely read by people of ages the humour and
    various incidents and how the author builds the character of Greg in a uniqueway makes it even more intriguing.</li>
    <li><span style="color:green"><b>Movie Rating :- 3.5/5</b></span> </li>
    <li>.............</li>
    </ul>


    </ol>


      </p></span>
    </h3>


  </div>
    <div class="clearfix"></div>
</div>

<!-- contact -->
<div class="contact" id="contact">
    <div class="title-div">
        <h3 class="tittle">
            <span style="color:Red">C</span>ontact <span style="color:Red">U</span>s
        </h3>
        <div class="tittle-style">
        </div>
    </div>
    <div class="col-md-6 map">
        <iframe src="https://maps.google.com/maps?q=SRM%20AP&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-md-6 contact_grids_info">
        <h5 class="small-title">Visit Us</h5>
        <div class="col-xs-4 contact_grid">
            <div class="contact_grid_right">
                <h4> <span style="color:Red">OFFICE 1</span></h4>
                <p>Kalyani Nagar,</p>
                <p> Gutur, Andhra Pradesh 522006</p>
            </div>
            <div class="address-row">
                <h5>Mail Us</h5>
                <p>
                    <a href="mailto:feedback@me.com"> FkdB69@gmail.com </a>
                </p>
            </div>
            <div class="address-row">
                <h5>Call Us</h5>
                <p>+91-9912345699</p>
            </div>
        </div>
        <div class="col-xs-4 contact_grid">
            <div class="contact_grid_right">
                <h4> <span style="color:Red">OFFICE 2</span></h4>
                <p>Vidya Nagar ,</p>
                <p> Andhra Pradesh 522005</p>
            </div>
            <div class="address-row">
                <h5>Mail Us</h5>
                <p>
                    <a href="mailto:feedback@me.com"> Goli@gmail.com </a>
                </p>
            </div>
            <div class="address-row">
                <h5>Call Us</h5>
                <p>+91-22333-64444</p>
            </div>
        </div>
        <div class="col-xs-4 contact_grid">
            <div class="contact_grid_right">
                <h4><span style="color:Red">OFFICE 3</span></h4>
                <p>Phase 13,</p>
                <p> Gachibowli Telangana 522001.</p>
            </div>
            <div class="address-row">
                <h5>Mail Us</h5>
                <p>
                    <a href="mailto:feedback@me.com"> RK@gmail.com </a>
                </p>
            </div>
            <div class="address-row">
                <h5>Call Us</h5>
                <p>+91-22333-54444</p>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="second-contact-agile">
    <div class="col-md-6 form-bg">
        <form action="#" method="post">
            <div class="contact-fields">
                <input type="text" name="HEllo" placeholder="Name" required="">
            </div>
            <div class="contact-fields">
                <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="contact-fields">
                <input type="text" name="Subject" placeholder="Subject" required="">
            </div>
            <div class="contact-fields">
                <textarea name="Message" placeholder="Message" required=""></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="col-md-6 address-left-second">
        <div class="address-grid">
            <h5 class="small-title">Contact Info</h5>
            <div class="address-grids">
                <span class="fa fa-volume-control-phone" aria-hidden="true"></span>
                <div class="contact-right">
                    <p>Telephone </p>
                    <span style="color:Red">+91-99876-54321</span>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-grids">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                <div class="contact-right">
                    <p>Mail </p>
                    <a href="mailto:info@example.com"><span style="color:Red">FkdB69@gmail.com</span></a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-grids">
                <span class="fa fa-map-marker" aria-hidden="true"></span>
                <div class="contact-right">
                    <p>Location</p>
                    <span style="color:Red">Neerukonda, Mangalagiri, Andhra Pradesh 522502</span>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-grids">
                <span class="fa fa-calendar" aria-hidden="true"></span>
                <div class="contact-right">
                    <p>Working Hours</p>
                    <span style="color:Red">Mon - Sat : 8:00 am to 10:30 pm</span>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //contact -->

<!-- footer -->
<div class="footer-bot">
    <div class="w3layouts-newsletter">
        <div class="col-md-7 agileinfo-newsletter">
            <h3>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="container">
        <div class="col-xs-3 logo2">
            <h2>
                <a href="Mainsec.html">
                  <span style="color:Red">M</span>ovie
                  <span style="color:Red">C</span>hrome
                  <span style="color:Red">R</span>eview
                </a>
            </h2>
        </div>
        <div class="col-xs-9 ftr-menu">
            <ul>
                <li>
                    <a href="Main.php">Home</a>
                </li>
                <li>
                    <a class="scroll" href="#movies">Movies</a>
                </li>
                <li>
                    <a class="scroll" href="#reviews">Reviews</a>
                </li>
                <li>
                    <a href="#critics" class="scroll">Critics</a>
                </li>
                <li>
                    <a class="scroll" href="#bookings">Ticket Bookings</a>
                </li>
                <li>
                    <a class="scroll" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->


<!-- js-scripts -->

<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jquery -->

<script src="js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->

<!--  light box js -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<!-- //light box js-->

<!-- stats numscroller-js-file -->
<script src="js/numscroller-1.0.js"></script>
<!-- //stats numscroller-js-file -->

<!-- Baneer-js -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- //Baneer-js -->

<!-- navigation -->
<script>
    (function ($) {
        // Menu Functions
        $(document).ready(function () {
            $('#menuToggle').click(function (e) {
                var $parent = $(this).parent('.menu');
                $parent.toggleClass("open");
                var navState = $parent.hasClass('open') ? "hide" : "show";
                $(this).attr("title", navState + " navigation");
                // Set the timeout to the animation length in the CSS.
                setTimeout(function () {
                    console.log("timeout set");
                    $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
                }, 200);
                e.preventDefault();
            });
        });
    })(jQuery);
</script>
<!-- //navigation -->

<!-- pop-up(for video popup)-->
<script src="js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //pop-up-box (syllabus section video)-->

<!-- video js (background) -->
<script src="js/jquery.vide.min.js"></script>
<!-- //video js (background) -->

<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth scrolling-bottom-to-top -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>
<!-- //smooth scrolling-bottom-to-top -->

<!-- flexSlider (for testimonials) -->
<script defer src="js/jquery.flexslider.js"></script>
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider (for testimonials) -->

<!-- //js-scripts -->

</body>

</html>
