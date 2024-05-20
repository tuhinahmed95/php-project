<?php 
$conn = mysqli_connect('localhost','root','','demo1');
if (isset($_POST['submit'])){
    $id = $_POST['id']; 
    $name = $_POST['name'];
    $age = $_POST['age'];
     $email = $_POST['email'];

     $sql = "INSERT INTO t_user1(id,name,age,email) VALUES ('$id','$name','$age','$email')";
     if(mysqli_query($conn, $sql) == TRUE){ 
        echo "DATA INSERTED";
        header('location:view.php');
     }else{ 
        echo "not inserted";
     }
}


?>

<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>crud1 Data insert 1st(bootstrap)</title>
</head>
<body>
   <div class="container"> 
    <div class="row"> 
        <div class="col-sm-3"></div>
        <a href="view.php">View Result</a>
        <div class="col-sm-6 pt-4 mt-4 border border-success"> 
    <form action="insert.php" method="POST"> 
        ID:<br>
        <input type ="number" name ="id"><br><br>
        Name:<br>
        <input type ="text" name ="name"><br><br>
        Age:<br>
        <input type ="number" name ="age"><br><br>
        Email:<br>
        <input type ="email" name ="email"><br><br>
        <input type ="submit" name ="submit" value="insert" class="btn btn-success">
    </form>
    </div>
        <div class="col-sm-3"></div>
    </div>
   </div>
</body>
</html>