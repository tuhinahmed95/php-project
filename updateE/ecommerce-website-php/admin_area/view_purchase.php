<?php



if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>


    <div class="row"><!--  1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / View Products

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!--  1 row Ends -->

    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title"><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw"></i> View Products

                    </h3><!-- panel-title Ends -->


                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <div class="table-responsive"><!-- table-responsive Starts -->

                        <table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Supplier Name</th>
                                    <th>Quantity</th>
                                </tr>

                            </thead>

                            <tbody>

                                <?php

                                $i = 0;

                                $get_pro = "select * from purchage";

                                $run_pro = mysqli_query($con, $get_pro);

                                while ($row_pro = mysqli_fetch_array($run_pro)) {



                                    $pro_title = $row_pro['product_title'];

                                    $pro_supplier = $row_pro['supplier_name'];

                                    $pro_quantity = $row_pro['quantity'];

                                    $i++;

                                ?>

                                    <tr>


                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $pro_title; ?></td>
                                        <td> <?php echo $pro_supplier; ?></td>


                                        <td> <?php echo $pro_quantity; ?> </td>


                                    </tr>

                                <?php } ?>


                            </tbody>


                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




<?php } ?>