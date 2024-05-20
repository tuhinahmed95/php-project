<?php  
$date = date('His');
$microtime =  microtime(true);
list($ftime,$ltime) = explode(".", $microtime);
$invoice_id = $date.$ltime;
if (!isset($_SESSION['p_invoive_id'])) {
	$_SESSION['p_invoive_id'] = $invoice_id;
}
if (isset($_POST['add_product'])) {
	$p_inv_id = $_SESSION['p_invoive_id'];
	$user_id = $_SESSION['s_id'];
	$p_id 	= (int)trim($_POST['pname']);
	$m_id 	= (int)trim($_POST['mname']);
	$price 	= (float)trim($_POST['price']);
	$qty 	= (float)trim($_POST['quantity']);
	$date 	= date("Y-m-d H:i:s");

	$query = $db->query("insert into purchase(price,qty,date,product_id,manufac_id,user_id,p_inv_id)values($price,$qty,'$date',$p_id,$m_id,$user_id,$p_inv_id ) ");
	if ($query) {
		$result = "Product added Successffully !";
	}else{
		$result = "Product error ! ";
	}
}

if (isset($_POST['save_product'])) {
	$p_inv_id = $_SESSION['p_invoive_id'];
	$user_id = $_SESSION['s_id'];
	$date 	= date("Y-m-d H:i:s");

	$query = $db->query("insert into p_invoice(id,date,hole_seller,user_id)values($p_inv_id,'$date','nul',$user_id ) ");
	if ($query) {
		$result = "Product Saved Successffully !";
		unset($_SESSION['p_invoive_id']);
	}else{
		$result = "Product error ! ";
	}
}

?>
<div class="col mt-4"> 
	<div class="row"> 
		<div class="col-1"></div>
		<div class="col-10">
			<form action="#" method="post"> 
				<div class="form-row"> 
					<div class="col"> 
						<div class="form-group"> 
							<label for="pname">Product Name *</label>
							<select name="pname" id="pname" class="form-control"> 
								<?php  
									$product= $db->query("select id,name from product");
									while (list($_pid,$_pname) = $product->fetch_row()) {
										echo "<option value='$_pid'>$_pname</option>";
									}
								?>
							</select>
						</div>
					</div>
					<div class="col"> 
						<div class="form-group"> 
							<label for="mname">Manufacturer Name *</label>
							<select name="mname" id="mname" class="form-control"> 
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
							<label for="price">Price *</label>
							<input type="text" name="price" id="price" class="form-control" placeholder="Product Price">
						</div>
					</div>
					<div class="col"> 
						<div class="form-group"> 
							<label for="quantity">Quantity *</label>
							<input type="text" name="quantity" id="quantity" class="form-control" placeholder="Product Quantity">
						</div>
					</div>
				</div>
				<div class="form-group text-center"> 
					<input type="submit" class="btn btn-primary" name="add_product" value="Add">
					<input type="reset" class="btn btn-primary" value="Reset">
					<input type="submit" class="btn btn-primary" name="save_product" value="Save All">
				</div>
			</form>
		</div>
		<div class="col-1"></div>
	</div>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
			<div class="text-center">
				<p> <?php echo isset($result)?$result:"Please Click Save All after Added !" ?></p>
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
						}else{
							$inv_id=1;
						}
						
						$purchase = $db->query("select pr.id,pr.p_inv_id,pr.date,p.name,m.name,u.username,pr.price,pr.qty from purchase pr,product p, user u, manufacturer m where p.id=pr.product_id and m.id=pr.manufac_id and u.id=pr.user_id and pr.p_inv_id=$inv_id order by pr.date desc  ");
						$gtotal = 0;
						while (list($_prid,$_inv,$_date,$_pnane,$_mname,$_uname,$_price,$_qty)=$purchase->fetch_row()) { 
							$time = date("h:i:s a",strtotime($_date));
							$date = date("d-m-Y",strtotime($_date));
							$total = $_price*$_qty;
							$gtotal += $total;
							?>
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
						<?php } ?>
							<tr> 
								<td colspan="8" class="text-right"><h5>Grand Total</h5></td>
								<td><?php echo $gtotal ?></td>
							 </tr>
				</tbody>
			</table>
		</div>
		<div class="col-1"></div>
	</div>
</div>



	