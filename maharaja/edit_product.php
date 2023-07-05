
<!DOCTYPE html>
<?php include "sidebar.php"; ?>
<?php include "config.php"; ?>
<?php 
	
   if(!empty($_GET['id'])) {
	
	 $id = $_GET['id'];
	
	$query = "SELECT * FROM  products WHERE product_id = $id ";
	$result = $con->query($query);
	
	while($row = $result->fetch_assoc()) {
        $product_name	 = $row['product_name'];
        $product_price	 = $row['product_price'];
		$product_id = $row['product_id'];
		
    }
   } 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			
                 <!-- /. ROW  -->
				 	<div class="panel-body"  style="line-height:35px;">
									<form class="row form-group" action="edit_product_code.php" enctype="multipart/form-data" method="post">
                                        <div class="col-lg-6 col-sm-12 col-md-6">
                                            <label class="control-label" style="margin-top:12px;">Product Name <span class="required">*</span></label>
											<input type="text" name="product_name" value="<?php echo $product_name; ?>" class="form-control" required >
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-md-6">
                                            <label class="control-label" style="margin-top:12px;">Product Price <span class="required">*</span></label>
											<input type="text" name="product_price" value="<?php echo $product_price; ?>" class="form-control" required>
                                        </div>
                                       
										
                                      
									
										<div class="col-lg-6 col-sm-12 col-md-6">
											<input type="hidden" name="product_id" value="<?php echo $product_id; ?>" class="form-control" >
                                        </div>
										
										
										
										
										<footer class="panel-footer">
                                    
											<div style="margin-top: 35px;" class="col-lg-12 col-sm-12 col-md-12" align="right">
												<input role="button" id="btnSubmit" value="Update" type="Submit" name="Update" class="btn btn-primary ">
												<span>&nbsp;</span>
											<!--	<a href="manage-candidate.php">
												  <button class="btn btn-secondary" >Cancel</button>
											    </a>  -->
											</div>
                                    
										</footer>
                                    </form>
								</div>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
