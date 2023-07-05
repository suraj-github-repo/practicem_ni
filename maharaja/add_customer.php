<!DOCTYPE html>
<?php include "sidebar.php"; ?>
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
				
            
			<body>
			<div class="panel-body" style="line-height: 35px;">
									<form class="row form-group" action="candidate_code.php" enctype="multipart/form-data" method="post">
										  <input type="hidden" name="$adminId"   value="<?php echo $adminId;?>" >
					
                                        <div class="col-lg-6 col-sm-12 col-md-6">
                                            <label class="control-label" >First Name <span class="required">*</span></label>
											<input type="text" name="fname" placeholder="Enter First Name" style="text-transform: capitalize;"  value="" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" class="form-control" required>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-md-6">
                                            <label class="control-label">Last Name <span class="required">*</span></label>
											<input type="text" name="lname" placeholder="Enter Last Name"  style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" value="" class="form-control" required >
                                        </div>
                                      
                                         <div style="margin: auto;" class="col-lg-6 col-sm-12 col-md-6 " >
                                            <label class="control-label" style="margin-top:12px;">Gender <span class="required">*</span></label>
											
											<div class="form-control" required>
												<label class="radio-inline"><input type="radio" name="gender" value="male" checked>Male</label>
												<label class="radio-inline"><input type="radio" name="gender" value="female" >Female</label>
												<label class="radio-inline"><input type="radio" name="gender" value="other" >Other</label>
											</div>
											
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-md-6">
                                            <label class="control-label" style="margin-top:12px;">Contact Number <span class="required">*</span></label>
											<input type="mobile" name="mobile" placeholder="Enter Contact Number" value="" onkeypress='validate(event)' maxlength="12" minlength="4" class="form-control"required >
                                        </div>
                                        
                                       
                                    <!--     <div class="col-lg-4 col-sm-12 col-md-6">
                                            <label class="control-label" style="margin-top:12px;">Country <span class="required">*</span></label>
                                          <select name="country" required id="data-plugin-selectTwo" placeholder="Enter Country" class="form-control populate" required>>
                                        <?php  foreach ($resultCountry as $key =>
                                        $row) { ?>
                                        <option value="<?php echo $row['con_id']; ?>"><?php echo $row['con_name']; ?></option>
                                        <?php } ?>
                                    </select>
											
                                        </div>
                                       <div class="col-lg-4 col-sm-12 col-md-6">
                                            <label class="control-label" style="margin-top:12px;">State <span class="required">*</span></label>
											<input type="text" name="state" placeholder="Enter State Name" value="" class="form-control" required>
                                        </div>-->
                                        
                                        <div class="col-lg-6 col-sm-12 col-md-6">
                                            <label class="control-label" style="margin-top:12px;">Address <span class="required">*</span></label>
											<input type="text" name="address" placeholder="Enter Address" style="text-transform: capitalize;"  value="" class="form-control" required>
                                        </div>
										
											
										
										
										<div class="col-sm-6" style="margin-top:50px" align="right">
                                            <label class="control-label"></label>
											<input role="button" value="Submit" id="btnSubmit" type="Submit" name="Submit" class="btn btn-primary ">
                                        </div>
										
										
										
									
								<!--		<footer class="panel-footer" align="right">
                                    
											<div style="margin-top: 20px;" class="col-lg-12 col-sm-12 col-md-12">
												<input role="button" value="Submit" type="Submit" name="Submit" class="btn btn-primary ">
												<span>&nbsp;</span>
											<!--	<a class="btn btn-light">Cancel</a>-->
										<!--	</div>
                                    
										</footer> -->
                                    </form>
								</div>
			</body>
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
