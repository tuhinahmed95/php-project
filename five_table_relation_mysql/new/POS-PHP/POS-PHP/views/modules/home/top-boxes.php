<?php
require_once "controllers/sales.controller.php";
require_once "controllers/categories.controller.php";
require_once "controllers/customers.controller.php";
require_once "controllers/products.controller.php";


$item = null;
$value = null;
$order = "id";

// Fetching data from controllers
$sales = sales_controller::ctrAddingTotalSales();
$categories = ControllerCategories::ctrShowCategories($item, $value);
$totalCategories = count($categories);
$customers = ControllerCustomers::ctrShowCustomers($item, $value);
$totalCustomers = count($customers);
$products = ControllerProducts::ctrShowProducts($item, $value, $order);
$totalProducts = count($products);
?>

<!-- HTML Code -->
<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
        <div class="inner">
            <h3>$<?php echo number_format($sales["total"], 2); ?></h3>
            <p>Sales</p>
        </div>
        <div class="icon">
            <i class="ion ion-social-usd"></i>
        </div>
        <a href="sales" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>

<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-primary">
        <div class="inner">
            <h3><?php echo number_format($totalCategories); ?></h3>
            <p>Categories</p>
        </div>
        <div class="icon">
            <i class="ion ion-clipboard"></i>
        </div>
        <a href="categories" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>

<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-purple">
        <div class="inner">
            <h3><?php echo number_format($totalCustomers); ?></h3>
            <p>Customers</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="customers" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>

<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
        <div class="inner">
            <h3><?php echo number_format($totalProducts); ?></h3>
            <p>Products</p>
        </div>
        <div class="icon">
            <i class="ion ion-ios-cart"></i>
        </div>
        <a href="products" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
