<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include("configLogin.php");
include("dataBase.php");
?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="col-md-6 col-lg-4">
    <div class="card shadow-lg">
      <div class="card-body p-4">
        <h3 class="text-center mb-4">Login</h3>
        <?php  
                    if(!empty($errormsg)) {
                          echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            <strong> $errormsg </strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                            </button>
                            </div>";
                    }
                
                    ?>
        <form method="post" >
          <div class="form-outline mb-3">
            <input type="email" name="emailName" id="email" class="form-control" placeholder="Email address" value="<?php if(isset($_POST['submit'])) echo $email ?>"  />
          </div>
          <div class="form-outline mb-3">
            <input type="password" name="passName" id="password" class="form-control" placeholder="Password"  />
          </div>
          <button type="submit" name="submit" class="btn btn-primary w-100 mb-3">Login</button>
          <div class="text-center">
            <a href="#" class="text-decoration-none">Forgot password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
