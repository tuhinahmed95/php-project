<?php 
	include("../server/connection.php");
	include '../set.php';
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM supplier,delivery,product_delivered,products WHERE supplier.supplier_id = '$id' AND delivery.supplier_id = '$id' AND delivery.transaction_no = product_delivered.transaction_no AND products.product_no = product_delivered.product_id GROUP BY products.product_no";
	$result	= mysqli_query($db, $sql);

	$failure = "";
	$deleted = isset($_GET['deleted']);
	$added  = isset($_GET['added']);
	$updated = isset($_GET['updated']);
	$undelete = isset($_GET['undelete']);
	$error = "";
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('../templates/head1.php');?>
</head>
<body>
	<div class="contain h-100">
		<?php include('../supplier/base.php');?>
		<div>
			<h1 class="ml-4 pt-2"><i class="fas fa-user-tie"></i> Supplier Management</h1>
			<hr>
			<?php include('../alert.php');?>
			<div class="table-responsive mt-4 pl-5 pr-5">
			<table class="table table-striped table-bordered table-sm" id="supplier_table">
				<thead>
					<tr>
						<th scope="col" class="column-text">Barcode</th>
						<th scope="col" class="column-text">Product Name</th>
						<th scope="col" class="column-text">Sell Price</th>
						<th scope="col" class="column-text">Quantity</th>
						<th scope="col" class="column-text">Unit</th>
						<th scope="col" class="column-text">Minimum Stocks</th>
						<th scope="col" class="column-text">Date</th>
						<th scope="col" class="column-text">Action</th>
					</tr>
				</thead>
				<tbody class="table-hover">
					<?php 
						while($row = mysqli_fetch_array($result)){
				  	?>
					<tr class="table-active">
						<td><?php echo $row['product_no'];?></td>
						<td><?php echo $row['product_name'];?></td>
						<td><?php echo $row['sell_price'];?></td>
						<td><?php echo $row['quantity'];?></td>
						<td><?php echo $row['unit'];?></td>
						<td><?php echo $row['min_stocks'];?></td>
						<td><?php echo date('d M Y, g:i A', strtotime($row["date"]));?></td>
						<td>
							<button type="button" name="view" style='font-size:10px; border-radius:5px;padding:4px;' id="<?php echo $row['product_no'];?>" class="btn btn-info btn-xs view_product"><i class="fas fa-info-circle"></i></button>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

			</div>
		</div>
	</div>
	<script src="../bootstrap4/jquery/jquery.min.js"></script>
	<script src="../bootstrap4/js/jquery.dataTables.js"></script>
	<script src="../bootstrap4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
	<?php include('../supplier/delete_supplier.php');?>
	<script>
		$(document).ready(function(){
			$('#supplier_table').dataTable();
		})
	</script>
</body>
</html>
<div id="productModal" class="modal fade bd-example-modal-md" data-backdrop="static" data-keyboard="false">  
	<div class="modal-dialog modal-md"  role="document">  
		<div class="modal-content">   
		<div class="modal-body d-inline" id="product_Details"></div> 
			<div class="modal-footer"> 
				<input type="button" class="btn btn-default btn-success" data-dismiss="modal" value="Okay">   
			</div>  
	   </div>  
	</div>  
</div>
<script src="../supplier/javascript.js"></script>