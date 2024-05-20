<?php
$UserName = "root";
$HostName = "localhost";
$Password = "";

$DatabaseName = "my_class";
$Connection = new mysqli($HostName,$UserName,$Password);

if($Connection->connect_error){
    die("connect error!!".$Connection->connect_error);
}
 echo "<h1>MySQL and php connection has been successfuly by oop. <br>successfull !!</h1>";

?>