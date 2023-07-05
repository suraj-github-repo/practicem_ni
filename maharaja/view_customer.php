
<!DOCTYPE html>
<?php include "sidebar.php"; ?>
<?php include "config.php"; ?>
<?php 
	
   if(!empty($_GET['id'])) {
	
	 $id = $_GET['id'];
	
	$query = "SELECT * FROM tbl_candidate_registration WHERE id = $id ";
	$result = $con->query($query);
	
	while($row = $result->fetch_assoc()) {
        $fname = $row['first_name'];
		$lname = $row['last_name'];
		$candidate_id = $row['id'];
		$gender = $row['gender'];
		$dob = $row['d_o_b'];
		$address = $row['address'];
		$mobile = $row['mobile'];
		$candid = $row['candidate_id'];
		
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
                                            <label class="control-label">First Name</label>
											<input type="text" disabled="disabled" name="fname" value="<?php echo ucfirst($fname); ?>" class="form-control" >
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-md-6">
                                            <label class="control-label">Last Name</label>
											<input type="text" name="lname" value="<?php echo ucfirst($lname); ?>" class="form-control"  disabled="disabled">
                                        </div>
										<div class="col-lg-4 col-sm-12 col-md-6">
                                            <label class="control-label">Candidate Id</label>
											<input type="email" name="userid" value="<?php echo $candid; ?>" class="form-control fileupload"  disabled="disabled" >
                                        </div>
										<div  class="col-lg-4 col-sm-12 col-md-6 " style="padding-top: 15px;">
                                            <label class="control-label">Gender</label>
											<?php if ($gender == 'male'){ ?>
											<div class="form-control" required disabled="disabled">
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="male" checked>Male</label>
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="female" >Female</label>
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="other" >Other</label>
											</div>
											<?php } ?>
											<?php if ($gender == 'female'){ ?>
											<div class="form-control" required disabled="disabled">
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="male">Male</label>
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="female" checked>Female</label>
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="other" >Other</label>
											</div>
											<?php } ?>
											<?php if ($gender == 'other'){ ?>
											<div class="form-control" required disabled="disabled">
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="male">Male</label>
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="female">Female</label>
												<label class="radio-inline"><input type="radio" disabled="disabled" name="gender" value="other" checked>Other</label>
											</div>
											<?php } ?>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-md-6" style="padding-top: 15px;">
                                            <label class="control-label">Date of Birth</label>
											<input type="date" name="d_o_b" value="<?php echo $dob; ?>" class="form-control"  disabled="disabled">
                                        </div>
                                         
                                        <div class="col-lg-4 col-sm-12 col-md-6" style="padding-top: 15px;">
                                            <label class="control-label">Contact Number</label>
											<input type="mobile" name="mobile" value="<?php echo $mobile; ?>" minlength="4" maxlength="12" class="form-control"  disabled="disabled">
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
