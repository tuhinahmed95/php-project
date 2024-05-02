<?php ob_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">SMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#expand-menu">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="expand-menu">
      <ul class="navbar-nav">
        <li class="nav-item "><a class="nav-link" href="home.php">Home</span></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Manufacturer</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="home.php?page=1">Add Manufacturer</a>
            <a class="dropdown-item" href="home.php?page=2">View Manufacturer</a>
            <a class="dropdown-item" href="home.php?page=3">Manage Manufacturer</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Product</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="home.php?page=4">Add Product</a>
            <a class="dropdown-item" href="home.php?page=5">View Product</a>
            <a class="dropdown-item" href="home.php?page=6">Manage Product</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Purchase</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="home.php?page=7">New Purchase</a>
            <a class="dropdown-item" href="home.php?page=8">View Purchase</a>
            <a class="dropdown-item" href="home.php?page=9">Manage Purchase</a>
            <a class="dropdown-item" href="home.php?page=10">Purchase Invoice</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Stock</a>
          <div class="dropdown-menu p-0">
            <a class="dropdown-item" href="home.php?page=11">View Stock</a>
            <a class="dropdown-item" href="home.php?page=12">Manage Stock</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Sales</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="home.php?page=13">New Sales</a>
            <a class="dropdown-item" href="home.php?page=14">View Sales</a>
            <a class="dropdown-item" href="home.php?page=15">Manage Sales</a>
            <a class="dropdown-item" href="home.php?page=16">Sales Invoice</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Customer</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="home.php?page=17">Add Customer</a>
            <a class="dropdown-item" href="home.php?page=18">View Customer</a>
            <a class="dropdown-item" href="home.php?page=19">Manage Customer</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">User</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="home.php?page=20">Add User</a>
            <a class="dropdown-item" href="home.php?page=21">View User</a>
            <a class="dropdown-item" href="home.php?page=22">Manage User</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="user-menu">
      <ul> 
        <li><a class="nav-link dropdown-toggle" href="#"><?php echo $_SESSION['s_name']; ?></a>
            <ul>
              <li><a href="home.php?user=1">Profile</a></li>
              <li><a href="home.php?user=2">Password</a></li>
              <li><a href="home.php?user=3">Logout</a></li>
            </ul>
        </li>
      </ul>      
    </div>    
  </div>
</nav>
