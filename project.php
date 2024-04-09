<?php
if(isset($_POST['btn'])){ 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
}


?>

<center>  
<body>
    <head> 

    <form action="$" method="post"> 
        <label for="name">Full Name</label>
        <input type="text" name="name">
        <label for="email">Email Address</label>
        <input type="email" name="email" placeholder="enter your email address">
        <label for="password">Password</label>
        <input type="password" name="password">
        <label for="cpassword">Confirm Password</label>
        <input type="password" name="cpassword">
        <input type="submit" name="btn" value="submit">
    </form>

    </head>
</body>

</center>