<?php 
if (!isset($db)) {
	header("location:index.php");
}

if (isset($_POST['add_product'])) {
	$pname = $_POST['pname'];
	$pinfo = $_POST['pinfo'];
	$m_id = $_POST['m_id'];
	$pdate = date("Y-m-d H:i:s");
	$u_id = $_SESSION['s_id'];
	$query = $db->query("insert into product(name,p_info,date,manufac_id,user_id)values('$pname','$pinfo','$pdate',$m_id,$u_id) ");
	if ($query ) {
		$result = "Product Added Successfully";
	}
}

?>
<div class="col-3"></div>
<div class="col-6">
	<div class="bg-light bordered round-0 p-3">
		<div class="ftitle text-center"> 
			<h4><?php echo isset($result)?$result:"Product Registration Form" ?></h4>
		</div>
		<form action="#" method="post"> 
			<div class="form-group"> 
				<label for="pname">Product Name</label>
				<input type="text" name="pname" id="pname" class="form-control" placeholder="Product Name">
			</div>
			<div class="form-group"> 
				<label for="m_id">Manufacturer Name</label>
				<select name="m_id" id="m_id" class="form-control">
					<?php  
						$mname = $db->query("select id,name from manufacturer ");
						while (list($_mid,$_mname) = $mname->fetch_row()) {
							echo "<option value='$_mid'>$_mname</option>";
						}
					?>
				</select>				
			</div>
			<div class="form-group"> 
				<label for="pinfo">Product Description</label>
				<textarea name="pinfo" id="pinfo" rows="3" class="form-control" placeholder="Product Description"></textarea>
			</div>
			<div class="form-group"> 
				<input type="submit" name="add_product" value="Add Product" class="btn btn-primary">
				<input type="reset" value="Reset" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
<div class="col-3"></div>

