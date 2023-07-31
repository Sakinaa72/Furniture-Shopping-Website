<?php
$conn = mysqli_connect("localhost", "root", "", "clg_project");
if($conn){
    // echo "connected";
    $query = "INSERT INTO `complaint`(`user_id`, `order_id`, `full_name`, `email`, `Phone_number`, `Reason`, `Description`) VALUES (1,1,'$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[reason]','$_POST[description]')";
//    echo $query;
   if(mysqli_query($conn, $query)){
    echo "Inserted";
    header("Location:  index.html");
   }
   else 
   echo "Not Inserted";
}
else
    echo "not connected";

?>