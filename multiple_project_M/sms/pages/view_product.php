<?php 
if (!isset($db)) {
	header("location:index.php");
} ?>
<div class="col-1"></div>
<div class="col-10">
	<div class="ftitle text-center"> 
		<h4><?php echo isset($result)?$result:"Product Information Table" ?></h4>
	</div>
	<table class="table table-striped table-bordered"> 
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
				$query = $db->query("select p.id,p.name,p.p_info,p.date,m.name,u.username from manufacturer m, user u, product p where p.user_id = u.id and p.manufac_id = m.id ");
				while (list($_id,$_pname,$_pinfo,$_date,$_mname,$_uname) = $query->fetch_row()) { 
					$date = date("d-m-Y",strtotime($_date));
				?>
					<tr> 
						<td><?php echo $_id ?></td>
						<td><?php echo $_pname ?></td>
						<td><?php echo $_pinfo ?></td>
						<td><?php echo $date ?></td>
						<td><?php echo $_mname ?></td>
						<td><?php echo $_uname ?></td>
					</tr>				
			<?php } ?>
		</tbody>
	</table>
</div>
<div class="col-1"></div>

