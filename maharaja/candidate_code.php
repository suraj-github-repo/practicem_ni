<?php
 include("config.php");
//$validation = new Validation();
 
if(isset($_POST['Submit'])) {    
    $first_name = $_POST['fname'];  
    $last_name = $_POST['lname']; 
    $candidate_id  = 'CD'.rand(10,999).'-'.rand(10,999).'-'.rand(10,999);
    $gender = $_POST['gender'];
   
   
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    
  //$adminId = $crud->escape_string($_POST['adminId']);

    //$sql2 = "select * from tbl_candidate_registration  where email ='$email'";

  //$query2 = mysqli_query($con, $sql2);

  //if (mysqli_num_rows($query2) > 0) {

   // echo '<script type="text/javascript">alert("Your Mail Id Already Exiest.\nPlease Enter Valid Mail Id");</script>';
   // echo '<script type="text/javascript">window.location.assign("../add-candidate.php");</script>';
   // die();
 

   //   echo "INSERT INTO `tbl_candidate_registration`(`candidate_id`,`first_name`,`last_name`,`gender`,`d_o_b`, `address`,`mobile`,`created_date`,`modified_date`,`currentStatus`) VALUES ('$candidate_id','$first_name','$last_name','$gender','$d_o_b','$address','$mobile',now(), now(), 'y');";
	//  die;
  }
        //insert data to database    
        $result ="INSERT INTO `tbl_candidate_registration`(`candidate_id`,`first_name`, `last_name`, `gender`, `address`,`mobile`,`created_date`, `modified_date`,`currentStatus`)
		VALUES( '$candidate_id','$first_name','$last_name','$gender','$address','$mobile',now(), now(), 'y')";

           if(mysqli_query($con, $result)){
              echo '<script type="text/javascript">alert("New Candidate created successfully...!(Please check mail in Inbox or Spam)");</script>';
              echo '<script type="text/javascript">window.location.assign("add_customer.php");</script>';
           } 
		   else{
              echo "ERROR: Could not able to execute $result. " . mysqli_error($link);
           }


if(isset($_POST['Update'])) {    
  $fname = $_POST['fname'];  
  $lname = $_POST['lname']; 
  $candidate_id = $_POST['candidate_id']; 

  $gender = $_POST['gender'];
 
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
   
      //insert data to database    
      $result = $crud->execute("UPDATE `tbl_candidate_registration` SET `first_name`='$fname',`last_name`='$lname',`gender`='$gender',`address`='$address',`mobile`='$mobile',`modified_date`=now()  WHERE id = '$candidate_id'");

        echo '<script type="text/javascript">alert("Candidate updated successfully...!");</script>';
        echo '<script type="text/javascript">window.location.assign("../manage-candidate.php");</script>';
       
      
}
if(isset($_POST['active'])) {  
  $candidate_id = $_POST['hiddenValue'];
  $status = $_POST['status']; 
  if( $status == "active"){
    $result = $crud->execute("UPDATE `tbl_candidate_registration` SET `currentStatus`='n'  WHERE id = '$candidate_id'");
  }
  if($status == "inactive"){
    $result = $crud->execute("UPDATE `tbl_candidate_registration` SET `currentStatus`='y'  WHERE id = '$candidate_id'");
  }
  // echo '<script type="text/javascript">alert("Table  have been sucessfully updated...!");</script>';
  echo '<script type="text/javascript">window.location.assign("../manage-candidate.php");</script>';
}


?>