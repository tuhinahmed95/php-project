<div class="col-1"></div>
		<div class="col-10">
			<div class="text-center mt-4">
				<h4> <?php echo isset($result)?$result:" All Purchase view table " ?></h4>
			</div>
			<table class="table table-bordered table-striped ">
				<thead class="bg-dark text-white">
					<tr>
						<td>Invoice No:</td>
						<td>Time</td>
						<td>Date</td>
						<td>Product Name</td>
						<td>Manufacturer</td>
						<td>Purchessed By</td>
						<td>Price</td>
						<td>Qty.</td>
						<td>Total</td>
					</tr>
				</thead>
				<tbody>
					<?php 
						if (isset($_SESSION['p_invoive_id'])) {
							$inv_id = $_SESSION['p_invoive_id'];
						}
						
						$purchase = $db->query("select pr.id,pr.p_inv_id,pr.date,p.name,m.name,u.username,pr.price,pr.qty from purchase pr,product p, user u, manufacturer m where p.id=pr.product_id and m.id=pr.manufac_id and u.id=pr.user_id order by pr.date desc ");
						$gtotal = 0;
						while (list($_prid,$_inv,$_date,$_pnane,$_mname,$_uname,$_price,$_qty)=$purchase->fetch_row()) { 
							$time = date("h:i:sa",strtotime($_date));
							$date = date("d-m-Y",strtotime($_date));
							$total = $_price*$_qty; ?>
							<tr>
								<td><?php echo $_inv ?></td>
								<td><?php echo $time ?></td>
								<td><?php echo $date ?></td>
								<td><?php echo $_pnane ?></td>
								<td><?php echo $_mname ?></td>
								<td><?php echo $_uname ?></td>
								<td><?php echo $_price ?></td>
								<td><?php echo $_qty ?></td>
								<td><?php echo $total ?></td>
							</tr>

						<?php 
							$gtotal +=$total;
						 } ?>
						 <tr> 
							<td colspan="8" class="text-right"><h5>Grand Total</h5></td>
							<td><?php echo $gtotal ?></td>
						 </tr>
				</tbody>
			</table>
		</div>
		<div class="col-1"></div>