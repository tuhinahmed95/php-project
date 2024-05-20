<?php 
$db = new mysqli('localhost','root','','company3');

if(isset($_POST['btnSubmit'])){
	$mname = $_POST['mname'];
	$contact = $_POST['contact'];
	$db->query(" call add_manufacture('$mname','$contact') ");
}


if(isset($_POST['addProduct'])){
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$mid = $_POST['manufac'];
	$db->query(" call add_product('$pname','$price','$mid') ");
}


if(isset($_POST['delmanufact'])){
	$mid = $_POST['manufac'];
	$db->query(" delete from manufacturer where id='$mid ' ");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mysql table data</title>
</head>
 <body style="background-color: rgb(43, 38, 38);">
		<div style="text-align:center;color:white;"><h2>Mysql procidural from</h2></div><hr>

		<div class="container"style="display: flex;background-color: gray;">


		<div class="table"style="margin-left: 100px;">
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
					
					<td><input type="submit" name="addProduct" value="submit" /></td>
				</tr>
			</table>
		</form>


		<form action="#" method="post">
			<table>
				<tr>
					<td><label for="manufac">Manufacturer:</label></td>
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
					<td><input type="submit" name="delmanufact" value="delete" /></td>
				</tr>
			</table>
		</form>
		</div>

			


		<div class="view_table"style="margin: auto; background-color: cornsilk;">

		<h3>View Product:</h3>

			<table border="1" style="border-collapse: collapse;" > 
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>M Name</th>
					<th>Contact</th>
				</tr>
				<?php 
					$product = $db->query(" select * from show_data ");
					while(list($_id,$_name,$_price,$_mname,$_mcont) = $product->fetch_row()){
						echo "<tr> 
								<td>$_id</td>
								<td>$_name</td>
								<td>$_price</td>
								<td>$_mname</td>
								<td>$_mcont</td>
							</tr>";
					}
				
				?>
			</table>

		</div>


		</div>

   </body>
</html>





