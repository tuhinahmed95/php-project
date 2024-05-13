<?php

if (!isset($_SESSION['admin_email'])) {

  echo "<script>window.open('login.php','_self')</script>";
} else {

?>
  <!DOCTYPE html>

  <html>

  <head>

    <title> Insert Purchase </title>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector: '#product_desc,#product_features'
      });
    </script>

  </head>

  <body>

    <div class="row"><!-- row Starts -->

      <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

          <li class="active">

            <i class="fa fa-dashboard"> </i> Dashboard / Purchase Product

          </li>

        </ol><!-- breadcrumb Ends -->

      </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row"><!-- 2 row Starts -->

      <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

          <div class="panel-heading"><!-- panel-heading Starts -->

            <h3 class="panel-title">

              <i class="fa fa-money fa-fw"></i> Purchase Product

            </h3>

          </div><!-- panel-heading Ends -->

          <div class="panel-body"><!-- panel-body Starts -->

            <form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->




              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Product Name </label>

                <div class="col-md-6">

                  <input type="text" name="product_title" class="form-control" required>



                </div>

              </div><!-- form-group Ends -->




              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Supplier Name </label>

                <div class="col-md-6">

                  <select class="form-control" name="manufacturer"><!-- select manufacturer Starts -->

                    <option> Supplier Name </option>

                    <?php

                    $get_manufacturer = "select * from manufacturers";
                    $run_manufacturer = mysqli_query($con, $get_manufacturer);
                    while ($row_manufacturer = mysqli_fetch_array($run_manufacturer)) {
                      $manufacturer_id = $row_manufacturer['manufacturer_id'];
                      $manufacturer_title = $row_manufacturer['manufacturer_title'];


                      echo "<option value='$manufacturer_title'>
$manufacturer_title
</option>";
                    }

                    ?>

                  </select><!-- select manufacturer Ends -->

                </div>

              </div><!-- form-group Ends -->


              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Quantity </label>

                <div class="col-md-6">

                  <input type="text" name="product_quantity" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"></label>

                <div class="col-md-6">

                  <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">

                </div>

              </div><!-- form-group Ends -->

            </form><!-- form-horizontal Ends -->

          </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

      </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




  </body>

  </html>

  <?php

  if (isset($_POST['submit'])) {

    $product_title = $_POST['product_title'];

    $supplier_name = $_POST['manufacturer'];
    $product_quantity = $_POST['product_quantity'];
    $purchage_product = "insert into purchage (product_title,supplier_name,quantity) values ('$product_title',' $supplier_name',' $product_quantity')";

    $run_purchage = mysqli_query($con, $purchage_product);

    if ($run_purchage) {

      echo "<script>alert('Purchage successfully')</script>";

      echo "<script>window.open('index.php?view_purchase','_self')</script>";
    }
  }

  ?>

<?php } ?>