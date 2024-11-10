<?php
include("configSignUp.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4">Sign Up</h3>
                    <?php  
                    if(!empty($errorMssage)) {
                          echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                          <strong>$errorMssage</strong>
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                            </button>
                              </div>";
                    }
                
                    ?>
                    <form method="post">
                        
                        <div class="form-outline mb-3">
                        
                            <input type="text" name="firstName" id="firstName" value="<?php if(isset($_POST['submit'])) echo $fnV ?>" class="form-control" placeholder="First Name" >
                        </div>
                        <div class="form-outline mb-3">
                          
                            <input type="text" name="lastName" id="lastName" value="<?php if(isset($_POST['submit'])) echo $lnv ?>" class="form-control" placeholder="Last Name" >
                        </div>
                        <div class="form-outline mb-3">
                            
                            <input type="email" name="emailName" id="email" value="<?php if(isset($_POST['submit'])) echo $emailV ?>" class="form-control" placeholder="Email Address" >
                        </div>
                        <div class="form-outline mb-3">
                          
                            <input type="password" name="passName" id="password" class="form-control" placeholder="Password" >
                        </div>
                        <div class="form-outline mb-4">
                            
                            <input type="password" name="ConfipassName" id="confirmPassword" class="form-control" placeholder="Confirm Password" >
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>

                    
                  <div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>success Message</strong>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                  </button>
                  </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
