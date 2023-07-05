
<!DOCTYPE html>
<?php include "sidebar.php"; ?>
<?php 
	
   error_reporting(0);
    include_once("config.php");
   
    $query = "SELECT * FROM tbl_candidate_registration order by id desc";
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
											<th class="text-center" style="width:10%;">Candidate Id</th>
											<th style="width:14%;" >Candidate Name</th>
                                          
                                          
                                            <th class="text-center">Contact Number</th>
											<th class="text-center">Created On</th>
											<th class="text-center">Status</th>
											<th class="text-center" style="width:14%;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php  while($row = $result->fetch_assoc()) { ?>
											<tr class="gradeX">
												<td class="text-center"><?php echo $i++; ?></td>
												<td class="text-center"><?php echo $row['candidate_id']; ?></td>
												<td><?php echo ucfirst($row['first_name'])." ".ucfirst($row['last_name']); ?></td>
														
												<td class="text-center"><?php echo $row['mobile']; ?></td>
												
												<td class="text-center"><?php echo date('d-m-Y',strtotime($row['created_date']));?></td>
												<td class="actions" align="center"
												
													<?php if($row['currentStatus']=='y'){ ?>
														<form action="manage-candidate.php" method="post">
															<button type="button" data-status="active" name="act" class="btn btn-success btn-sm btn-custom rounded-0 exampleModal" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?php echo $row['id']; ?>">Active</button>
														</form>
														
													
													<?php } ?>
													<?php if($row['currentStatus']=='n'){ ?>
													<form action="manage-candidate.php" method="post">
														<button type="button" class="btn btn-danger btn-sm rounded-0 btm-custom exampleModal" name="inact" data-status="inactive" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?php echo $row['id']; ?>">Inactive</button>
													</form>
														
													
													<?php } ?>
												</td>
												<td class="actions" align="center">
													 <a href="view_customer.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm btn-custom rounded-0"><i class="fa fa-eye" title="View" alt="View" style="color: white"></i></a>&nbsp; 
													<a href="edit_customer.php?id=<?php echo $row['id']; ?>"  class="btn btn-success btn-sm btn-custom rounded-0"><i class="fa fa-pencil" title="Edit"  style="color: white"></i></a>
													
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
