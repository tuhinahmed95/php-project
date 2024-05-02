<?php session_start();
include "config/database.php";
$db = new Database();
date_default_timezone_set("Asia/Dhaka"); 

if(isset($_POST['btn-login'])) {
	$user =	trim($_POST['user']);
	$pass =	trim($_POST['pass']);

	$query = $db->query("SELECT * FROM user WHERE username='$user' AND password='$pass' ");
	list($_id,$_uname,$_pass,$_email,$_date)=$query->fetch_row();
	$_SESSION['s_id'] = $_id;
	$_SESSION['s_name'] = $_uname;
	header("location:home.php");
}
include "include/header.php";
?>
<div class="container mt-5"> 
	<div class="row"> 
		<div class="col-3"></div>
		<div class="col-6">
			<div class="bg-light bordered round-0 p-3">
				<div class="ftitle text-center"> 
					<h4><?php echo isset($result)?$result:"Welcome login Page ! " ?></h4>
				</div>
				<form action="#" method="post"> 
					<div class="form-group"> 
						<label for="user">User Name</label>
						<input type="text" class="form-control" name="user" id="user" placeholder="User Name">
					</div>
					<div class="form-group"> 
						<label for="pass">Password</label>
						<input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="submit" name="btn-login" value="Login" class="btn btn-primary">
						<input type="reset" class="btn btn-primary" value="Reset">
					</div>
				</form>
			</div>
		</div>
		<div class="col-3"></div>
	</div>
</div>