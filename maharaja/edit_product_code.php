<?php
 include("config.php");
//$validation = new Validation();
 

if(isset($_POST['Update'])) {    
  $product_name = $_POST['product_name'];  
  $product_price = $_POST['product_price']; 
  $product_id = $_POST['product_id']; 

 // echo "UPDATE `products` SET `product_name`='$product_name',`product_price`='$product_price' WHERE product_id = '$product_id'";
  //die;
      //insert data to database    
      $result ="UPDATE `products` SET `product_name`='$product_name',`product_price`='$product_price' WHERE product_id = '$product_id'";


      if ($con->query($result) === TRUE) {
    echo '<script type="text/javascript">alert("Candidate updated successfully...!");</script>';
        echo '<script type="text/javascript">window.location.assign("manage_product.php");</script>';
       
} else {
  echo "Error updating record: " . $conn->error;
}

      
}

?>