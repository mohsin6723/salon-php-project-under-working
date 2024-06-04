<?php
include 'header.php';
?>
<section class="vh-100 height" style="background-color: #eee;">
  <div class="container  h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="h1 mx-4 fw-bold mb-5 - mt-4">Sign up</p>
                <form class="mx-1 mx-md-4 " action="signup_code.php" method="POST">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-user fa-lg me-3 fa-fw"></i> -->
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="name" class="form-control" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-envelope fa-lg me-3 fa-fw"></i> -->
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" name="email" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" name="password" class="form-control" />
                      <label class="form-label" for="form3Example4c">Your Password</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-key fa-lg me-3 fa-fw"></i> -->
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" name="r_password" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>
                  <div class="d-flex  mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit_btn"  class="btn btn-primary btn-lg">Register</button>
                  </div>
                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
include 'footer.php';
?>