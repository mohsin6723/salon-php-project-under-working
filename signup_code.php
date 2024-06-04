<?php
include 'connection.php';
if(isset($_POST['submit_btn'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  if($password!=$r_password){
    echo "<h1>Password does not match</h1>";
    header('location:signup.php');
  }

$query="insert into salon_user(name,email,password) values('$name','$email','$password')";
$run=mysqli_query($connect,$query);
if($run){
    echo '
    <script>
    alert(Data inserted Successfully);
    document.location.href = "signup.php"
    </script>
    ';
}
}

?>