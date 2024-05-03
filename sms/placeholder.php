<?php 

if(isset($_GET['user'])){
	$user = $_GET['user'];
	if ($user == 1) {
		include "welcome.php";
	}elseif($user == 2){
		include "welcome.php";
	}elseif($user == 3){
		header("location:logout.php");
	}
}

if (isset($_GET['page'])){
	$page = $_GET['page'];
	if($page == 1){
		include "forms/add_manufacturer.php";
	}elseif($page == 2){
		include "pages/view_manufacturer.php";
	}elseif($page == 3){
		include "pages/manage_manufacturer.php";
	}elseif($page == 4){
		include "forms/add_product.php";
	}elseif($page == 5){
		include "pages/view_product.php";
	}elseif($page == 6){
		include "pages/manage_product.php";
	}elseif($page == 7){
		include "forms/add_purchess.php";
	}elseif($page == 8){
		include "pages/view_purchess.php";
	}elseif($page == 9){
		include "welcome.php";
	}elseif($page == 10){
		include "welcome.php";
	}elseif($page == 20){
		include "forms/add_user.php";
	}elseif($page == 21){
		include "pages/view_user.php";
	}elseif($page == 22){
		include "pages/manage_user.php";
	}

}else{
	include "welcome.php";
}


