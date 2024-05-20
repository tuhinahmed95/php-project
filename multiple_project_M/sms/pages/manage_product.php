<?php 
if (!isset($db)) {
	header("location:index.php");
}
if (isset($_POST['up_product'])) {
	$p_id = $_POST['p_id'];
	$pname = $_POST['pname'];
	$pinfo = $_POST['pinfo'];
	$m_id = $_POST['m_id'];
	$r_date = $_POST['r_date'];
	$pdate = date("Y-m-d",strtotime($r_date));
	$u_id = $_SESSION['s_id'];
	$query = $db->query("update product set name='$pname',p_info='$pinfo',date='$pdate',manufac_id=$m_id,user_id=$u_id where id=$p_id ");
	if ($query ) {
		$result = "Product Updated Successfully !";
	}
}
if (isset($_POST['del_product'])) {
	$p_id = $_POST['p_id'];
	$query = $db->query("delete from product where id=$p_id ");
	if ($query) {
		$result = "Product Deleted Successfully";
	}
}

?>
<div class="col-1"></div>
<div class="col-10">
	<div class="ftitle text-center"> 
		<h5><?php echo isset($result)?$result:"Product Information Table" ?></h5>
		<small>Click row for select to modify/delete</small>
	</div>
	<table class="table table-striped table-hover table-bordered"> 
		<thead class="bg-dark text-white">
			<tr>
				<th>#ID</th>
				<th>Product Name</th>
				<th>Product Details</th>
				<th>Reg. Date</th>
				<th>Manufacturer</th>
				<th>Added By</th>
			</tr>
		</thead>
		<tbody> 
			<?php  
				$query = $db->query("select p.id,p.name,p.p_info,p.date,m.name,m.id,u.username from manufacturer m, user u, product p where p.user_id = u.id and p.manufac_id = m.id ");
				while (list($_id,$_pname,$_pinfo,$_date,$_mname,$_m_id,$_uname) = $query->fetch_row()) { 
					$date = date("d-m-Y",strtotime($_date));
				?>
					<tr data-toggle="modal" data-target="#modal_<?php echo $_id ?>"> 
						<td><?php echo $_id ?></td>
						<td><?php echo $_pname ?></td>
						<td><?php echo $_pinfo ?></td>
						<td><?php echo $date ?></td>
						<td><?php echo $_mname ?></td>
						<td><?php echo $_uname ?></td>
					</tr>
					<!-- Modal -->
					<div class="modal fade" id="modal_<?php echo $_id ?>">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel"><?php echo $_pname ?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
									<input type="hidden" name="p_id" value="<?php echo $_id ?>">
									<div class="modal-body">
										<div class="form-row"> 
											<div class="col"> 
												<div class="form-group"> 
													<label for="pname">Product Name</label>
													<input type="text" name="pname" id="pname" class="form-control" value="<?php echo $_pname ?>">
												</div>
											</div>
											<div class="col">
												<div class="form-group"> 
													<label for="m_id">Manufacturer Name</label>
													<select name="m_id" id="m_id" class="form-control">
														<option value='<?php echo $_m_id ?>'><?php echo $_mname ?></option>
														<?php  
															$manufac = $db->query("select id,name from manufacturer ");
															while (list($_mid,$_mname) = $manufac->fetch_row()) {
																echo "<option value='$_mid'>$_mname</option>";
															}
														?>
													</select>				
												</div>
											</div>
											<div class="col">
												<div class="form-group"> 
													<label for="r_date">Reg. Date</label>
													<input type="text" name="r_date" id="r_date" class="form-control" value="<?php echo $date ?>">			
												</div>
											</div>
										</div>
										<div class="form-group"> 
											<label for="pinfo">Product Description</label>
											<textarea name="pinfo" id="pinfo" rows="3" class="form-control" placeholder="Product Description"><?php echo $_pinfo ?></textarea>
										</div>	
									</div>
									<div class="modal-footer">
										<input type="submit" name="up_product" value="Update" class="btn btn-primary">
										<input type="submit" name="del_product" value="Delete" class="btn btn-primary">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div><!-- end modal-content -->
						</div><!-- end modal-dialog -->
					</div><!-- end Modal -->
			<?php } ?>
		</tbody>
	</table>
</div>
<div class="col-1"></div>

