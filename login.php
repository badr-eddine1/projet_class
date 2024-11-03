<?php
include("configLogin.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >
<div class="container py-4 border rounded-5 p-3 bg-white shadow box-area">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right">
          <div class="card-body p-5  text-center">
            <h2 class="fw-bold mb-5">Sign in now</h2>
            <form method="post">
         
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" value="<?php if(isset($_POST['submit'])) echo $email ?>" name="emailName" id="form3Example3" class="form-control" placeholder="Email address"/>
                <label class="form-label" for="form3Example3"></label>
                <span style="color: red;"><?php echo $emailError ?></span>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="passName" id="form3Example4" class="form-control" placeholder="password" />
                <label class="form-label" for="form3Example4"></label>
                <span style="color: red;"><?php echo $passwordError ?></span>
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