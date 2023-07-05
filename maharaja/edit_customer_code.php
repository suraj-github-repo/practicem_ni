<?php
 include("config.php");
//$validation = new Validation();
 

if(isset($_POST['Update'])) {    
  $fname = $_POST['fname'];  
  $lname = $_POST['lname']; 
  $candidate_id = $_POST['candidate_id']; 

  $gender = $_POST['gender'];
  $d_o_b = $_POST['d_o_b'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
   
      //insert data to database    
      $result ="UPDATE `tbl_candidate_registration` SET `first_name`='$fname',`last_name`='$lname',`gender`='$gender',`d_o_b`='$d_o_b',`address`='$address',`mobile`='$mobile',`modified_date`=now()  WHERE id = '$candidate_id'";


      if ($con->query($result) === TRUE) {
    echo '<script type="text/javascript">alert("Candidate updated successfully...!");</script>';
        echo '<script type="text/javascript">window.location.assign("manage_customer.php");</script>';
       
} else {
  echo "Error updating record: " . $conn->error;
}

      
}

?>