<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ankita Paints &amp; Hardware</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <?php
            include 'includes/header.php';
        ?>
    <!--<header>
        
        <div class="container">
            
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href=""><img class="logo" src="images/LOGO.png" alt=""></a>
                <ul class="nav-list">
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        -->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image: url(images/hero2.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">Ankita Paints &amp; Hardware</h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s">Web Design and Development Agency</h3>
                        <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(images/hero3.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s">We Are <span>Franco</span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s">Web Design and Development Agency</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(images/hero1.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1s">We Are <span>Diligent</span></h2>
                        <h3 class="animated fadeInLeft" style="animation-delay: 2s">Web Design and Development Agency</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!--Header ends-->
         <!--Register Section
        
        <div class="regform">
            <div class="regform-content">
                <h1 class="reg-head">Register to get <span class="reg-span">Special Offers</span></h1>
                
                <div class="close-icon">+</div>
                
                <form action="reg.php" method="post">
                 <input type="text" class="form" placeholder="Your Name" required="required" data-error="Name is required." name="name">
                    
                <input type="number" class="form" placeholder="Your Contact Number" required="required" data-error="Contact Number is required." name="number">
                    
                <input type="email" class="form" placeholder="Your Email ID" required="required" data-error="Email ID is required." name="email">
                
                <input type="text" class="form" placeholder="Password" required="required" data-error="Enter Password." name="password">
                
               <input type="submit" class="submit-btn">
            </form>
            </div>
        </div>
    -->

<!--
==============
    color
==============
-->

<div class="container2">
    <h1 class="text-center colorheading">Latest Color</h1>
    <div class="row grid-padding">
        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Orange Spark.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Orange Spark</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Twilight Pink.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Twilight Pink</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

        <!--colors-->
        <div class="col-md-2 product-grid">
            <div class="image">
                <a href="#">
                    <img src="img/Blue Glory.webp" alt="">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h4 class="text-center">Blue Glory</h4>
            <h5 class="text-center">Code: 7054</h5>
            <a href="#" class="btn buy">Buy Now</a>
        </div>
        <!--/colors-->

    </div>
</div>



        <section class="discover-our-products discover-new-products">
            <div class="container">
                <div class="product-info">
                    <div class="product-description padding-right animate-left">
                        <div class="main-headline">
                            <h2 class="sub-headline">
                                <span class="first-ltr">N</span>ow Available
                            </h2>
                            <h1 class="headline">Viroprotek Advanced</h1>
                        </div>
                        <p>
                        A liquid non sticky hand sanitizer and disinfectant which kills 99.9% germs without any water. It provides instant rise-free protection &amp; is safe on skin. Apart from Isopropyl alcohol, it is further fortified with clove oil &amp; leaves a soothing clove fragrance on your hands. Use as often as required.
                        </p>
                        <a href="https://www.asianpaints.com/products/sanitizers/viroprotek-200-hand-sanitizer.html" class="btnstyle body-btn">More Info</a>
                    </div>
                    <div class="product-info-img animate-right">
                        <img src="images/sanitizer.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>



        <section class="experience-outdoors">
            <div class="container">
                <div class="title-heading">
                    <h3>Explore</h3>
                    <h1>The New Products</h1>
                    <!--<p>With Asian Paints’ Interior Design Service</p>-->
                </div>
    
                <div class="activities-grid">
                    <!--grid item #1-->
                    <div class="activities-grid-item stencil" 
                    data-text="Kid Stencils
With wall stencils, your dream decor is just one DIY project away. Unlike wallpaper, wall stencils allow you to choose any paint color so you can match your decor perfectly.

You can stencil an entire room with just one reusable repeat stencil, instead of purchasing rolls of expensive wallpaper.">
                    <img src="stencil.PNG" alt="">
                    </div>
                     <!--grid item #2 -->
                     <div class="activities-grid-item sticker" 
                    data-text="Sticker
What do a dog, fish and DJ have in common? They're all part of our Kids collection! Find a complete spectrum of wall stickers your kids will love. 
Apply the wall decals on any smooth surface and you're good to go! It's the easiest, fastest and most affordable way to decorate.">
                    </div>
                    <!--grid item #3 -->
                    <div class="activities-grid-item nilaya" 
                    data-text="Nilaya
A wall covering does much more than just covering a wall - it brings the wall to life.

Nilaya is an exquisite new offering from Asian Paints, a perfect blend of our rich understanding of surfaces and the Indian aesthetics. It reveals a world of inspiration, where design, material, and technique come together to create stunning surfaces.">
                    </div>          
                </div>
            </div>
        </section>

<!--
        <section class="testimonials" id="service">
            <div class="container">
                <div class="testimonial">
                    <div class="testimonial-text-box">
                       <img src="images" alt="">
                        <h1>Confused?</h1>
                    </div>
                    <div class="testimonial-text-box">
                        <p>Get a free consultancy</p>
                        <p>No need to hurry! Consult before purchasing with our Shop Owner </p>
                       
                    </div>
                </div>
            </div>
        </section>
-->
        
        
<!--Offer section-->    
        <section class="discover-our-products">
            <div class="container">
                <div class="product-info">
                    <div class="product-description padding-left animate-right">
                        <div class="main-headline">
                            <h2 class="sub-headline">
                                <span class="first-ltr">N</span>ew Offers
                            </h2>
                            <h1 class="headline">Home Delivery Available</h1>
                        </div>
                        <p class="discount">
                        Get discount<br>
                            <span>upto 20% </span> <br>on Selected Products
                        </p>
                        <br><br>
                        <a href="contact" class="btnstyle visit-btn">More Info</a>
                    </div>
                    <div class="product-info-img animate-left">
                        <img src="images/offer.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

<!--contact section-->
         <section class="contact" id="contact">
            <div class="container">
                <div class="contact-info">
                    <div class="contact-description padding-right animate-left">
                        <div class="main-headline cont-headline">
                            <h2 class="sub-headline">
                                <span class="first-ltr">R</span>each us
                            </h2>
                           <!-- <h1 class="headline"></h1>-->
                        </div>
                        <div class="contact-info-details">
                            <ul>
                                <li class="cont-item">
                                    <a href="#" class="cont-link"><span> Address</span> <br> Shyampur More, B-19, Sukanta Pally Road, Durgapur-1, West Bengal 713201</a>
                                </li>                         
                                <li class="cont-item">
                                    <a href="tel:+919800473581" class="cont-link"><span>Phone </span> <br> +919800473581</a>
                                </li>
                                <li class="cont-item">
                                    <a href="#" class="cont-link"><span>Email </span>  <br> ankitapaintsandhardware@gmail.com</a>
                                </li>
                                <li class="cont-item"> 
                                    <a href="#" class="cont-link"><span> Working Hours</span> <br> Saturday-Thursday <br>7:00 AM to 1:00 PM <br> 5:00 PM to 8:00 PM</a>
                                </li> 
                            </ul>
                        </div>
                        <a href="https://www.asianpaints.com/products/sanitizers/viroprotek-200-hand-sanitizer.html" class="btnstyle body-btn cont-btn">More Info</a>
                    </div>
                    <div class="contact-map animate-right">
                        <!--<div class="map-heading">
                                <i class="fas fa-map-marked-alt" class="map-icon">&nbsp;</i>
                        </div>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.2374452228646!2d87.3173456144789!3d23.487955504669138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f76ddd65a591a5%3A0x8f228e1478a1eb07!2sAnkita%20Paints%20%26%20Hardware!5e0!3m2!1sen!2sin!4v1591432015555!5m2!1sen!2sin" width="300" height="300" frameborder="0" style="border: .5rem white solid; left: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
                    </div>
                </div>
                <div class="social-media">
                        <a href="https://www.facebook.com/ankitapaintshardware" class="social-list"><i class="fab fa-facebook-square"></i></a>
                        <a href="" class="social-list"><i class="fab fa-instagram"></i></a>
                        <a href="" class="social-list"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social-list"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div>
        </section>
        
    </main>

    <footer>
        <p>&copy;ankitapaint&amp;hardware- All rights reserved</p>
    </footer>

    <script type="text/javascript" src="main.js">
    </script>
        

    <!-- GetButton.io widget 
    <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+919800473581", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
 /GetButton.io widget -->
 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
    include 'includes/scroll-top.php';
?>
</body>
</html>
