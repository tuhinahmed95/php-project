<?php 
if (!isset($db)) {
	header("location:index.php");
}

if (isset($_POST['add_manufac'])) {
	$mname = $_POST['mname'];
	$minfo = $_POST['minfo'];
	$mdate = date("Y-m-d H:i:s");
	$u_id = $_SESSION['s_id'];
	$query = $db->query("insert into manufacturer(name,info,date,user_id)values('$mname','$minfo','$mdate',$u_id) ");
	if ($query ) {
		$result = "Manufacture Added Successfully";
	}
}

?>
<div class="col-3"></div>
<div class="col-6">
	<div class="bg-light bordered round-0 p-3">
		<div class="ftitle text-center"> 
			<h4><?php echo isset($result)?$result:"Manufacture Registration Form" ?></h4>
		</div>
		<form action="#" method="post"> 
			<div class="form-group"> 
				<label for="mname">Manufacturer Name</label>
				<input type="text" name="mname" id="mname" class="form-control" placeholder="Manufacturer Name">
			</div>
			<div class="form-group"> 
				<label for="minfo">Manufacturer Description</label>
				<textarea name="minfo" id="minfo" rows="3" class="form-control" placeholder="Manufacturer Description"></textarea>
			</div>
			<div class="form-group"> 
				<input type="submit" name="add_manufac" value="Add Manufacture" class="btn btn-primary">
				<input type="reset" value="Reset Form" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
<div class="col-3"></div>

