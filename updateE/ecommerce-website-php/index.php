<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
?>


<!-- Cover -->
<main>
  <div class="hero">

    <a href="#" class="btn1">View all products
      <!-- in the href section will come shop.php -->
    </a>
  </div>
  <!-- Main -->

  <div class="wrapper">
    <h1>Featured Collection<h1>

  </div>



  <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

      <?php

      getPro();

      ?>

    </div><!-- row Ends -->

  </div><!-- container Ends -->
  <!-- FOOTER -->
  <footer class="page-footer ">

    <div class="footer-nav ">
      <div class="container clearfix">

        <div class="footer-nav__col  footer-nav__col--info">
          <div class="footer-nav__heading">Information</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">The brand</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Local stores</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Customer service</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Site map</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--whybuy">
          <div class="footer-nav__heading">Why buy from us</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Secure shipping</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Testimonials</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Award winning</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Ethical trading</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--account">
          <div class="footer-nav__heading">Your account</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Sign in</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Register</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">View cart</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">View your lookbook</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Track an order</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Update information</a>
            </li>
          </ul>
        </div>


        <div class="footer-nav__col footer-nav__col--contacts">
          <div class="footer-nav__heading">Contact details</div>
          <address class="address">
            Head Office: IDB.<br>
            Dhaka,Bangladesh
          </address>
          <div class="phone">
            Telephone:
            <a class="phone__number" href="tel:01684883865">01684883865</a>
          </div>
          <div class="email">
            Email:
            <a class="email__addr">support@gmail.com</a>
          </div>
        </div>

      </div>
    </div>

    <div class="banners">
      <div class="container clearfix">

        <div class="banner-award">
          <span>Award winner</span><br> Fashion awards 2024
        </div>

        <div class="banner-social">
          <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
          <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
          <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
          <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
        </div>

      </div>
    </div>

    <div class="page-footer__subline">
      <div class="container clearfix">

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> DhakaMart&trade;
        </div>

        <div class="developer">
          Developed by Rakib,Meem,Shaheen,Tuhin
        </div>



      </div>
    </div>
  </footer>
  </body>

  </html>