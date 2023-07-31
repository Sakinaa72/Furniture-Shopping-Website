<?php
$conn = mysqli_connect("localhost", "root", "", "clg_project");
if($conn){
    $query = "SELECT user_id FROM `table_user` WHERE user_email = '$_POST[email]' AND user_password ='$_POST[password]'";
    if(mysqli_query($conn, $query)){
    
        header("Location:  index.html");

    }

}

?>