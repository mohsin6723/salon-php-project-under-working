<?php
include 'header.php';
?>


<div class="row">
    <div class="col-4 offset-3">
    <?php
if(isset($_SESSION['success'])){
?>
<div class="row d-flex justify-content-center">
    <div class="col">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>hey!</strong> <?php echo $_SESSION['success'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
</div>
<?php
session_unset();
}
?>
<section class="logincss">
<form class="container" action="logincheck.php" method="POST">
<h1>login form</h1>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" name="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" name="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button  type="submit" name="submitbtn"  class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    <p>or sign up with:</p>
   

  </div>
</form>
      
  

</section>
<?php
include 'footer.php';
?>