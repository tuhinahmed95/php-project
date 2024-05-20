<?php 
$db = new mysqli('localhost','root','','company');

if(isset($_POST['btnSubmit'])){
	$mname = $_POST['mname'];
	$contact = $_POST['contact'];
	$db->query(" call pro_manufacture('$mname','$contact') ");
}

if(isset($_POST['addProduct'])){
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$mid = $_POST['manufac'];
	$db->query(" call pro_product('$pname','$price','$mid') ");
}


if(isset($_POST['delbtn'])){
	$tri=$_POST['trigger'];
	$db->query("delect FROM product where id ='$tri'" );
}

?>

<h3>Manufacturer table:</h3>
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="mname">Name</label></td>
			<td><input type="text" name="mname" /></td>
		</tr>
		<tr>
			<td><label for="contact">Contact</label></td>
			<td><input type="text" name="contact" /></td>
		</tr>
		<tr>
			<td><label for="adress">Address</label></td>
			<td><input type="text" name="adress" /></td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="btnSubmit" value="submit" /></td>
		</tr>
	</table>
</form>

<h3>Product table:</h3>
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="pname">Name</label></td>
			<td><input type="text" name="pname" /></td>
		</tr>
		<tr>
			<td><label for="price">Price</label></td>
			<td><input type="text" name="price" /></td>
		</tr>
		<tr>
			<td><label for="manufac">Manufacturer Name</label></td>
			<td>
				<select name="manufac">
					<?php 
						$manufac = $db->query("select * from manufacturer");
						while(list($_mid,$_mname) = $manufac->fetch_row()){
							echo "<option value='$_mid'>$_mname</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="addProduct" value="submit" /></td>
		</tr>
	</table>
</form> <hr>





<h3>View Product</h3>

<table border="1" style="border-collapse: collapse;" > 

 <tr>
	<th>ID</th>
	<th>Name</th>
	<th>Contact</th>
	<th>pid</th>
	<th>pname</th>
	<th>price</th>
	<th>Manufacturer Name</th>
 </tr>


 <?php
   $show = $db->query("SELECT * FROM view_companydata");
   while(list($id,$Name,$contact,$pid,$pname,$price,$manufactura_name)=$show->fetch_row()){

	echo " <tr>
			<td>$id</td>
			<td>$Name</td>
			<td>$contact</td>
			<td>$pid</td>
			<td>$pname</td>
			<td>$price</td>
			<td>$manufactura_name</td>
	    </tr>";
   }
 ?>


</table>

		<form action="#" method = "POST">
				<table>
					
					<tr>
						<td><label for="trigger">manufacturer</label></td>
						<td>

                            <select name="trigger" >


                                     <?php
									      $_ptrigger = $db->query("select * FROM manufacturer");
										  while(list($pid,$pname)=$_ptrigger->fetch_row()){
											echo "<option value='$pid'>$pname</option>";
										  }

									 ?>


							</select>

						</td>
					</tr>
						<tr>
							<td><input type="submit" name="delbtn" value="delete"></td>
						</tr>
				</table>

		</form>





