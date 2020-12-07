<?php
    require 'includes/connection.inc.php';
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
    <link rel="stylesheet" href="css/product.css">
</head>
<body>

  <?php
  include 'includes/header.php';
  ?>
<!--   <header>
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
    </header>
  -->
    <div class = "card-wrapper">
        <div class = "card">
          <!-- card left -->
          <div class="product-img">
            <img src="images/tropicalPeach.webp" alt=""  id="featured">
            <div class="product-images">
              <img src="images/tropicalPeach.webp" alt="" class="thumbnail active">
              <img src="images/tropicalPeachColor.webp" alt=""  class="thumbnail second">
            </div>
          </div>
          <!-- card right -->
          <div class = "product-content">
            <h2 class = "product-title">Tropical Peach</h2>
            <a href = "#" class = "product-link">Color Code: 8022</a>
            <div class = "product-rating">
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star-half-alt"></i>
              <span>4.7(21)</span>
            </div>
  
            <div class = "product-ideal">
              <p>IDEAL FOR HIGHLIGHT WALLS</p>
              <p>IDEAL FOR ENTERTAINMENT ROOM</p>
              <p>IDEAL FOR EXTERIOR TIMS AND ACCENTS</p>
            </div>
  
            <div class = "product-detail">
              <h2>Description: </h2>
              <p>Rich cherry chocolate radiates glimmers of fire and keeps you warm. Colour at its deepest and most vigorous. How can you resist a shade as delectable and as opulent as this? Its grandeur will captivate you in an instant.</p>
              <ul>
                <li>Available: <span>in stock</span></li>
                <li>Category: <span>Interior</span></li>
                <li>Shipping Area: <span>Durgapur,West Bengal</span></li>
              </ul>
            </div>
  
            <div class = "purchase-info">
            <a href="#product.inc"><button type = "button" class = "btn">
                Choose Product <img class="btn-icon" src="images/paint-bucket.png" alt="">
              </button></a>
              <a href="#product.inc"><button type = "button" class = "btn">
                  Add to Cart <i class = "fas fa-shopping-cart"></i>
              </button></a>
            </div>
  
            <div class = "social-links">
              <p>Share At: </p>
              <a href = "#">
                <i class = "fab fa-facebook-f"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-twitter"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-instagram"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-whatsapp"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-pinterest"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
<div id="product.inc">
<?php
  include 'product.inc.php';
?>
</div>

<script src="main.js"></script>
<?php
    include 'includes/scroll-top.php';
?>
</body>
</html>