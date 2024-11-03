<?php

  include("configSignUp.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


  <div class="container py-4 border rounded-5 p-3 bg-white shadow box-area">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right">
          <div class="card-body p-5  text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form method="post">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" value="<?php if(isset($_POST['submit'])) echo $fnV ?>"name="firstName" id="form3Example1" class="form-control" placeholder="First name" />
                    <label class="form-label" for="form3Example1"></label>
                    <span style="color: red;"><?php echo $fnError ?></span>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" name="lastName" value="<?php if(isset($_POST['submit'])) echo $lnv ?>" id="form3Example2" class="form-control" placeholder="Last name" />
                    <label class="form-label" for="form3Example2"></label>
                    <span style="color: red;"><?php echo $lnError ?></span>
                  </div>
                </div>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" name="emailName" value="<?php if(isset($_POST['submit'])) echo $emailV ?>" id="form3Example3" class="form-control" placeholder="Email address"/>
                <label class="form-label" for="form3Example3"></label>
                <span style="color: red;"><?php echo $emailError ?></span>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="passName" id="form3Example4" class="form-control" placeholder="password" />
                <label class="form-label" for="form3Example4"></label>
                <span style="color: red;"><?php echo $passError ?></span>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="ConfipassName" id="form3Example4" class="form-control" placeholder="Confirm password" />
                <label class="form-label" for="form3Example4"></label>
                <span style="color: red;"><?php echo $confirmPassError ?></span>
              </div>

              <button type="submit" name="submit" class="btn btn-primary btn-block mb-4"> Sign up</button>

             
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>



</body>
</html>