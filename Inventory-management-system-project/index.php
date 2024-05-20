<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Panel</title>
<link rel="stylesheet" href="libs/css/main.css">
</head>
<body style="background-image: url('PHOTOS/fgggf.jpg'); background-size: cover; background-repeat: no-repeat;">

  <?php
    ob_start();
    require_once('includes/load.php');
    if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
  ?>
  <?php include_once('layouts/header.php'); ?>
  <div>
  <div class="login-page">
      <div class="text-center">
         <h1>Login Panel</h1>
         <h4>Inventory Management System</h4>
       </div>
       <?php echo display_msg($msg); ?>
        <form method="post" action="auth.php" class="clearfix">
          <div class="form-group">
                <label for="username" class="control-label">Username</label>
                <input type="name" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="form-group">
              <label for="Password" class="control-label">Password</label>
              <input type="password" name= "password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
                  <button type="submit" class="btn btn-danger" style="border-radius:2%">Login</button>
          </div>
      </form>
  </div>
  
  <?php include_once('layouts/footer.php'); ?>
</body>
</html>

