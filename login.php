<?php
$emailError = $passwordError = "";

if( isset($_POST['submit']) ){

    $email = $_POST['emailName'];
    $password = $_POST['passName'];
    if ($email == "") {
        $emailError = "Email is required.";
        
    } 
    
      
     else if (preg_match("/\w+(@gmail\.com){1}$/",$password)){
        $emailError= "email invalid";
      }
    

    else if ($password == "") {
        $passwordError = "Password is required.";
      
    } 
    
      
    else if(strlen($password)<=8){
        $passwordError="the password must containe 8 chars";
      }
    
      else{
        header("location:home.php");
      }

  }


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



  <div class="container min-vh-100 ">

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

      <div class="col-md-6 left-box">
          <div class="featured-image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ_2oII-AssPFNOvcLQ6ecJ6ZWQlUbKU3j8w&s" class="img-fluid" >
          </div>
         
         
          
      </div>


      <div class="col-6 right-box">
        
           <form  method="post">
            
            <div class="header mb-4">
              <header><h1>hello , again</h1></header>
            </div>
             
              <div class="form-group mb3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control form-control-lg " name="emailName" id="exampleInputEmail1" placeholder="Enter email">
                <span style="color: red;"><?php echo $emailError ?></span>
                
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="passName" class="form-control form-control-lg  " id="exampleInputPassword1" placeholder="Password">
                <span style="color: red;"><?php echo $passwordError ?></span>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" name="submit" class="btn btn-primary w-100 fs-6">LOGIN</button>
            </form>

      </div>
    </div>
    </div>  





</body>
</html>