<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Your Booking  Data</title>
  </head>
  <body>
    <h1>View Data</h1>
<table class="table table-hover">
    <tr>
        <th>Full Name</th>
        <th>Phone Number</th>
        <th>Email Address</th>
        <th>Enter Address</th>
    </tr>
    <?php
    $query="select * from booking_data";
    $run=mysqli_query($connect,$query);
    while($data=mysqli_fetch_assoc($run)){
        ?>
        <tr>
            <td><?php echo $data['full_name'];?></td>
            <td><?php echo $data['p_no'];?></td>
            <td><?php echo $data['email_address'];?></td>
            <td><?php echo $data['address'];?></td>
            <td><?php echo $data['u_id'];?></td>
            <td><a href="edit.php?id=<?php echo $data['u_id']?>" class="text-success"><i class="fa-solid fa-pen-to-square" style="color: #0e3f2a;"></i></a>|<a href="delete.php?id=<?php echo $data['u_id']?>" class="text-danger"> <i class="fa-solid fa-trash-can" style="color: #500719;"></i></a></td>
        </tr>

<?php
    }
?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html