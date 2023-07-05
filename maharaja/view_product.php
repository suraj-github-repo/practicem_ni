
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
				 
				<div class="panel-body" style="line-height: 35px;">
									<form class="row form-group" action="classes/candidate_code.php" enctype="multipart/form-data" method="post">
                                        <div class="col-lg-4 col-sm-12 col-md-6">
                                            <label class="control-label">product Name</label>
											<input type="text" disabled="disabled" name="fname" value="<?php echo ucfirst($product_name); ?>" class="form-control" >
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-md-6">
                                            <label class="control-label">product price</label>
											<input type="text" name="lname" value="<?php echo ucfirst($product_price); ?>" class="form-control"  disabled="disabled">
                                        </div>
										
                                        
                             
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
