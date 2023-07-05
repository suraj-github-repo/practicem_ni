
<!DOCTYPE html>
<?php include "sidebar.php"; ?>
<?php 
	
   error_reporting(0);
    include_once("config.php");
   
    $query = "SELECT * FROM products";
	$result = $con->query($query);
if ($result->num_rows > 0) {
   
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
				 
				<div class="panel-body">
								
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th class="text-center" style="width:7%;">Sr. No. </th>
											<th class="text-center" style="width:10%;">Product Id</th>
											<th style="width:14%;" >Product Name</th>
                                          
                                          
                                            <th class="text-center">Product Price</th>
											
											<th class="text-center" style="width:14%;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php  while($row = $result->fetch_assoc()) { ?>
											<tr class="gradeX">
												<td class="text-center"><?php echo $i++; ?></td>
												<td class="text-center"><?php echo $row['product_id']; ?></td>
												<td><?php echo ucfirst($row['product_name'])." ".ucfirst($row['last_name']); ?></td>
														
												<td class="text-center"><?php echo $row['product_price']; ?></td>
												
												
												<td class="actions" align="center">
													 <a href="view_product.php?id=<?php echo $row['product_id']; ?>" class="btn btn-primary btn-sm btn-custom rounded-0"><i class="fa fa-eye" title="View" alt="View" style="color: white"></i></a>&nbsp; 
													<a href="edit_product.php?id=<?php echo $row['product_id']; ?>"  class="btn btn-success btn-sm btn-custom rounded-0"><i class="fa fa-pencil" title="Edit"  style="color: white"></i></a>
													
												</td>
											</tr>
<?php } }?>
									</tbody>
								</table>
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
