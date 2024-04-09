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
        <label for="name">Full Name</label><br>
        <input type="text" name="name"><br>
        <label for="email">Email Address</label><br>
        <input type="email" name="email" placeholder="enter your email address"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <label for="cpassword">Confirm Password</label><br>
        <input type="password" name="cpassword"><br><br>
        <input type="submit" name="btn" value="submit">
    </form>

    </head>
</body>

</center>