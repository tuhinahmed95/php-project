<?php 
if (!isset($db)) {
	header("location:index.php");
} ?>
<div class="col-12">
<div class="row"> 
	<div class="col-1"></div>
	<div class="col-10">
		<div class="bg-light bordered round-0 p-3 mt-5">
			<div class="ftitle text-center"> 
				<h4><?php echo isset($result)?$result:"User Registration Form" ?></h4>
			</div>
			<form action="#" method="post">
				<div class="form-row"> 
					<div class="col"> 
						<div class="form-group"> 
							<label for="uname">User Name</label>
							<input type="text" name="uname" id="uname" class="form-control" placeholder="User Name">
						</div>
					</div>
					<div class="col"> 
						<div class="form-group"> 
							<label for="upass">Password</label>
							<input type="password" name="upass" id="upass" class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="col"> 
						<div class="form-group"> 
							<label for="rtype">Retype</label>
							<input type="password" name="rtype" id="rtype" class="form-control" placeholder="Retype Password">
						</div>
					</div>
				</div>
				<div class="form-row"> 
					<div class="col"> 
						<div class="form-group"> 
							<label for="date">Registration Date</label>
							<input type="text" name="date" id="date" class="form-control" placeholder="DD-MM-YYYY">
						</div>
					</div>
					<div class="col"> 
						<div class="form-group">
							<label for="date">Registration Date</label>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
							  <label class="form-check-label" for="gridRadios1">
								First radio
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
							  <label class="form-check-label" for="gridRadios2">
								Second radio
							  </label>
							</div>
						</div>
					</div>
					<div class="col"> 
						<div class="form-group"> 
							<label for="role">User Role</label>
							<select name="role" id="role" class="form-control"> 
								<option value="1">Admin</option>
								<option value="2">Editor</option>
								<option value="3">Subscriber</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-row text-center"> 
					<div class="form-group"> 
						<input type="submit" name="add_user" value="Add User" class="btn btn-primary">
						<input type="reset" value="Reset Form" class="btn btn-primary">
					</div>
				</div>				
			</form>
		</div>	
	</div>
	<div class="col-1"></div>
</div>
<div class="row">
<div class="col-1"></div>
<div class="col-10">
	<div class="ftitle text-center"> 
		<h4><?php echo isset($result)?$result:"User Information Table" ?></h4>
	</div>
	<table class="table table-striped table-bordered"> 
		<thead class="bg-dark text-white">
			<tr>
				<th>Option</th>
				<th>#ID</th>
				<th>User Name</th>
				<th>Designation</th>
				<th>Activity</th>
				<th>Adding Date</th>
			</tr>
		</thead>
		<tbody> 
			<?php  
				$query = $db->query("select * from user ");
				while (list($_id,$_username,$_password,$_role_id,$_inactive,$_date) = $query->fetch_row()) { 
					$date = date("d-m-Y",strtotime($_date));
					if(!$_inactive == 1){
						$active = "Yes";
					}else{
						$active = "No";
					}
				?>
					<tr> 
						<td></td>
						<td><?php echo $_id ?></td>
						<td><?php echo $_username ?></td>
						<td><?php echo $_role_id ?></td>
						<td><?php echo $active ?></td>
						<td><?php echo $date ?></td>
					</tr>				
			<?php } ?>
		</tbody>
	</table>
</div>
<div class="col-1"></div>
</div>
</div>