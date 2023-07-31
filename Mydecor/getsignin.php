<?php
$conn = mysqli_connect("localhost", "root", "", "clg_project");
if($conn){
    $query = "INSERT INTO `table_user`(`user_email`, `user_password`) VALUES ('$_POST[email]','$_POST[password]')";
//    echo $query;
   if(mysqli_query($conn, $query)){
    // echo "Inserted";
    header("Location:  index.html");
   }
   else 
   echo "Not Inserted";
}
   // echo "connected";

else
    echo "not connected";

?>