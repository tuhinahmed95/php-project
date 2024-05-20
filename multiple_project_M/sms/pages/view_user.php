<?php 
if (!isset($db)) {
	header("location:index.php");
} ?>
<div class="col-1"></div>
<div class="col-10">
	<div class="ftitle text-center"> 
		<h4><?php echo isset($result)?$result:"User Information Table" ?></h4>
	</div>
	<table class="table table-striped table-bordered"> 
		<thead class="bg-dark text-white">
			<tr>
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

