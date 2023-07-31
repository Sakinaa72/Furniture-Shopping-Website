<?php
$conn = mysqli_connect("localhost", "root", "", "clg_project");
if($conn){
    // echo "connected";
    $query = "INSERT INTO `feedback`(`user_id`, `product_id`, `comment`) VALUES (1,1,'$_POST[message]')";
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

