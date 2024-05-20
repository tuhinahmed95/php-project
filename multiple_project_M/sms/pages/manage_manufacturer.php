<?php 
if (!isset($db)) {
	header("location:index.php");
}
if (isset($_POST['upp_manufac'])) {
	$m_id = $_POST['m_id'];
	$mname = $_POST['mname'];
	$minfo = $_POST['minfo'];
	$date = $_POST['date'];
	$_date = date("Y-m-d",strtotime($date));
	$u_id = $_SESSION['s_id'];
	$query = $db->query("update manufacturer set name='$mname',info='$minfo',date='$_date',user_id=$u_id where id= $m_id");
	if ($query ) {
		$result = "Manufacture Updated Successfully";
	}
}
if (isset($_POST['m_id'])) {
	$m_id = $_POST['m_id'];
	$query = $db->query("delete from manufacturer where id= $m_id");
	if ($query ) {
		$result = "Manufacture Delete Successfully";
	}
}


?>
<div class="col-1"></div>
<div class="col-10">
	<div class="ftitle text-center"> 
		<h5><?php echo isset($result)?$result:"Manufacture Manage Table update/delete" ?></h5>
		<small>Click row for select to modify/delete</small>
	</div>
	<table class="table table-striped table-bordered table-hover"> 
		<thead class="bg-dark text-white">
			<tr>
				<th>#ID</th>
				<th>Manufac. Name</th>
				<th>Manufac. Details</th>
				<th>Reg. Date</th>
				<th>Created By</th>
			</tr>
		</thead>
		<tbody> 
			<?php  
				$query = $db->query("select m.id,m.name,m.info,m.date,u.username from manufacturer m, user u where m.user_id = u.id ");
				while (list($_id,$_mname,$_minfo,$_date,$_uname) = $query->fetch_row()) { 
					$date = date("d-m-Y",strtotime($_date));
				?>
					<tr> 
						<td><?php echo $_id ?></td>
						<td><?php echo $_mname ?></td>
						<td><?php echo $_minfo ?></td>
						<td><?php echo $date ?></td>
						<td><?php echo $_uname ?></td>
						<td><span data-toggle="modal" data-target="#modal_<?php echo $_id ?>"><button type="button" class="btn btn-primary" data-dismiss="modal">Edit</button></span>
					</td>

					</tr>
					<div class="modal fade" id="modal_<?php echo $_id ?>" role="dialog">
						<div class="modal-dialog" role="document">
							<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"><?php echo $_mname ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<input type="hidden" value="<?php echo $_id ?>" name="m_id">
										 <div class="form-group"> 
											<label for="mname">Manufacturer Name</label>
											<input type="text" name="mname" id="mname" class="form-control" value="<?php echo $_mname ?>">
										</div>
										<div class="form-group"> 
											<label for="minfo">Manufacturer Description</label>
											<textarea name="minfo" id="minfo" rows="3" class="form-control"><?php echo $_minfo ?></textarea>
										</div>
										<div class="form-group"> 
											<label for="date">Registration Date</label>
											<input type="text" name="date" id="date" class="form-control" value="<?php echo $date ?>">			
										</div>
									</div>
									<div class="modal-footer">
										<input type="submit" value="Update" name="upp_manufac" class="btn btn-primary">
										<input type="submit" value="Delete" name="m_id" class="btn btn-primary">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</form><!--End modal form-->
						</div>
					</div>	<!--End modal-->		
			<?php } ?>
		</tbody>
	</table>
</div>
<div class="col-1"></div>

