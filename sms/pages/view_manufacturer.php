<?php 
if (!isset($db)) {
	header("location:index.php");
} ?>
<div class="col-1"></div>
<div class="col-10">
	<div class="ftitle text-center"> 
		<h4><?php echo isset($result)?$result:"Manufacture Information Table" ?></h4>
	</div>
	<table class="table table-striped table-bordered"> 
		<thead class="bg-dark text-white">
			<tr>
				<th>#ID</th>
				<th>Manufac. Name</th>
				<th>Manufac. Details</th>
				<th>Reg. Date</th>
				<th>Added By</th>
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
					</tr>				
			<?php } ?>
		</tbody>
	</table>
</div>
<div class="col-1"></div>

