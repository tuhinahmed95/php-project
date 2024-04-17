<?php
$connectDB = mysqli_connect("localhost","","root","college");

if(isset($_POST['btn'])){ 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gpa = $_POST['gpa'];
    $roll = $_POST['roll'];

}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>

    <form action="#" method="POST" style=background-color:tomato; width:300px;> 
        <label for="id"> ID
            <input type="text" name="id">
        </label><br><br> 

        <label for="name">NAME 
            <input type="text" name="name">
        </label><br><br>

        <label for="gpa">GPA
            <input type="text" name="gpa">
        </label><br><br>

        <label for="roll">ROLL 
            <input type="text" name="roll">
        </label><br><br>

        <input type="submit" name="btn" value="submit">
    </form>
    
</body>
</html>