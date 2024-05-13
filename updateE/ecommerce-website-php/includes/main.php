</head>

<body>

  <header class="page-header">


    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a style="color:#fff; font-family: Rancho , cursive;font-size: 30px;text-decoration: none;" class="logo__link" href="index.php">
            Dhaka Mart
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="index.php">

                Home

              </a>
            </li>


            <li class="categories__item">
              <a class="categories__link categories__link--active" href="#">
                <!-- in the href file will come shop.php -->
                Shop
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="3">
                <!-- in the href file will come localstore.php -->
                Local Stores
              </a>
            </li>

            <li class="categories__item">
              <?php
              if (!isset($_SESSION['customer_email'])) {
                echo '<a href="#" class="categories__link">Register</a>';
                // in the href will come customer_register.php
              } else {
                echo '<a href="#" class="categories__link">My Account</a>';
                // in the href will come customer/my_account.php?my_orders
              }
              ?>
            </li>
            <li class="categories__item">
              <?php
              if (!isset($_SESSION['customer_email'])) {
                echo '<a href="#" class="categories__link">LogIn</a>';
                // in the href will come checkout.php
              } else {
                echo '<a  href="#"  class="categories__link">Logout</a>';
                // in the href will come ./logout.php
              }
              ?>
            </li>
            <!-- <li class="categories__item">
              <a href="cart.php" class="categories__link btn btn--basket">
                <i class="icon-basket"></i>
               //<?php items(); ?>
               
               items
              </a>
            </li> -->



          </ul>
        </nav>


      </div>




    </div>
    </div>
  </header>