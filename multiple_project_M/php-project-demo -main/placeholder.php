<?php
   
   if(isset($_GET["page"])){
	   $page=$_GET["page"];
	   
	   if($page==1){
		   
		 include("pages/user/add_user.php"); 
		   
	   }else if($page==2){
		   
		   include("pages/user/manage_user.php");
		  
	   }else if($page==3){
		   
		   //include("pages/contact/view_contact.php");
		   include("pages/user/edit_user.php");
		  
	   }else if($page==4){
		   
		   include("pages/user/add_user.php");
		  
	   }else if($page==5){
		   
		   include("pages/user/manage_user.php");
		  
	   }else if($page==6){
		   
		   include("pages/user/view_user.php");
		  
	   }else if($page==7){
		   
		    include("forms/add_manufacturer.php");
		  
	   }else if($page==8){
		   
		    include("pages/product/manage_product.php");
		  
	   }else if($page==9){
		   
		    include("pages/product/view_products.php");
		  
	   }else if($page==10){
		   
		    include("pages/product/edit_product.php");
		  
	   }else if($page==11){
		   
		    include("pages/order/view_orders.php");
		  
	   }
	   
   }else{
	   
       echo "Welcome to my Ne Project";
   }

?>