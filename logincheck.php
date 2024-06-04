<?php
include 'connection.php';
session_start();
if(isset($_POST['submitbtn'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
$query="select * from salon_user where email='$email' AND password='$password'";
$run=mysqli_query($connect,$query);
if(mysqli_num_rows($run)>0){
  $_SESSION['email']=$email; 
  $_SESSION['success']="you logeed in Successfully";
  echo '
    <script>
    alert("signup Successfully");
    document.location.href = "index.php";
    </script>
    ';

}
else{
    echo "email and password does not match";
}

}

?>