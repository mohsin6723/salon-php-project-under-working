<?php
include 'connection.php';
if(isset($_POST["submitbtn"])){
$u_id=$_POST["u_id"];
$full_name=$_POST["full_name"];
$p_no=$_POST["p_no"];
$email_address=$_POST["email_address"];
$address=$_POST["address"];
$query="Insert into booking_data(u_id,full_name,p_no,email_address,address) values ($u_id,'$full_name',$p_no,'$email_address','$address')";
$run=mysqli_query($connect,$query);
echo '
<script>
alert(Booking Successfully Done);
document.location.href = "index.php"
</script>
';
}
    ?>