<?php
include 'connection.php';
session_start();
if(isset($_POST["submitbtn"])){
$u_id=$_POST['u_id'];
$full_name=$_POST["full_name"];
$p_no=$_POST["p_no"];
$email_address=$_POST["email_address"];
$address=$_POST["address"];
$query="update booking_data set full_name='$full_name',p_no='$p_no',email_address='$email_address',address='$address' where u_id=$u_id";
$run=mysqli_query($connect,$query);
if($run){
    $_SESSION['success']='Data update successfully';
    echo '
    <script>
    alert("Data update Successfully");
    document.location.href = "view_data.php";
    </script>
    ';

}

}