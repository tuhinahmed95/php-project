<?php 
if (!isset($db)) {
	header("location:index.php");
}

if (isset($_POST['add_user'])) {
	$uname = trim($_POST['uname']);
	$upass = trim($_POST['upass']);
	$rtype = trim($_POST['rtype']);
	$activity = $_POST['activity'];
	$role = trim($_POST['role']);	
	$date = date("Y-m-d H:i:s");
	if($upass == $rtype){
		$query = $db->query("insert into user(username,password,role_id,inactive,date)values('$uname','$upass','$role',$activity,'$date')  ");
		$result = "User Added Successfully";
	}else{
		$result = "Password not match";
	}
	
}

?>
<div class="col-3"></div>
<div class="col-6">
	<div class="bg-light bordered round-0 p-3 mt-5">
		<div class="ftitle text-center"> 
			<h4><?php echo isset($result)?$result:"User Registration Form" ?></h4>
		</div>
		<form action="#" method="post"> 
			<div class="form-group"> 
				<label for="uname">User Name</label>
				<input type="text" name="uname" id="uname" class="form-control" placeholder="User Name">
			</div>
			<div class="form-group"> 
				<label for="upass">Password</label>
				<input type="password" name="upass" id="upass" class="form-control" placeholder="Password">
			</div>
			<div class="form-group"> 
				<label for="rtype">Retype</label>
				<input type="password" name="rtype" id="rtype" class="form-control" placeholder="Retype Password">
			</div>
			<div class="form-group"> 
				<label class="" for="rtype">Active 
					<input type="radio" name="activity" value="0" />
				</label>
				<label class="" for="rtype">Inactive 
					<input type="radio" name="activity" value="1" />
				</label>
			</div>
			<div class="form-group"> 
				<label for="role">User Role</label>
				<select name="role" id="role" class="form-control"> 
					<option value="1">Admin</option>
					<option value="2">Editor</option>
					<option value="3">Subscriber</option>
				</select>
			</div>
			<div class="form-group"> 
				<input type="submit" name="add_user" value="Add User" class="btn btn-primary">
				<input type="reset" value="Reset Form" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
<div class="col-3"></div>

