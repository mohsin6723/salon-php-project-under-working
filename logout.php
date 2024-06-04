<?php
  session_start();
if(isset($_POST['logout_submit'])){
session_unset();
session_destroy();
session_start();
$_SESSION['success']="logout successfully";
// $_SESSION['success']="Logout Successfully";
header('Location:login.php'); 

}
?>