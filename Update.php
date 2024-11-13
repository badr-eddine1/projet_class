
<?php
include("dataBase.php");

$emailV="";
$fnV="";
$lnv="";
$errorMssage=$successmsg="";

if($_SERVER['REQUEST_METHOD']=='GET'){

  $sql = "SELECT firstname,lastname,email FROM User WHERE id='$_GET[idUpdated]'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) {

  $emailV=$row['email'];
  $fnV=$row['firstname'];
  $lnv=$row['lastname'];



}

} 
}

else if(isset($_POST["submit"])){
    $fnV=$_POST["firstName"];
    $lnv=$_POST["lastName"];
    $emailV=$_POST["emailName"];
    if(empty($fnV) || empty($lnv)||empty($emailV)){
        $errorMssage="input is required";
    }
    else if (!preg_match("/\w+(@gmail\.com){1}$/",$emailV)){
        $errorMssage= "email invalid";
      }

    else{
        

        $sql = "UPDATE  User set firstname='$fnV',lastname='$lnv', email='$emailV' WHERE id='$_GET[idUpdated]'";



        if (mysqli_query($conn, $sql)) {

        $successmsg= "New upsate created successfully";

        } else {

        $errorMssage= "Error: " . $sql . "<br>" .
        mysqli_error($conn);

}
    }
}







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
    <div class="row ">
        <div class="col-md-6 col-lg-5">
            <div class="card ">
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
                        
                            <input type="text" name="firstName" id="firstName" value="<?php echo $fnV ?>" class="form-control" placeholder="First Name" >
                        </div>
                        <div class="form-outline mb-3">
                          
                            <input type="text" name="lastName" id="lastName" value="<?php  echo $lnv ?>" class="form-control" placeholder="Last Name" >
                        </div>
                        <div class="form-outline mb-3">
                            
                            <input type="email" name="emailName" id="email" value="<?php  echo $emailV ?>" class="form-control" placeholder="Email Address" >
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100"> Update</button><br>
                        <a href="read.php" class="btn btn-primary w-100">cancel</a>
                    </form>

                     <?php  
            if(!empty($successmsg)) {
                 echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>$successmsg</strong>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                  </button>
                  </div>"; }
                  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
