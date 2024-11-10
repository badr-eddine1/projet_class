<?php
include("dataBase.php");
$errormsg= "";

if( isset($_POST['submit']) ){

    $email = $_POST['emailName'];
    $password = $_POST['passName'];
    if ($email == "") {
        $errormsg = "Email is required.";
        
    } 
    
      
     else if (!preg_match("/\w+(@gmail\.com){1}$/",$email)){
        $errormsg= "email invalid";
      }
    

    else if ($password == "") {
        $errormsg = "Password is required.";
      
    } 
    
      
    else if(strlen($password)<=8){
        $errormsg="the password must containe 8 chars";
      }

    
      else{
            $sql = "SELECT email, password FROM Users";
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

            // output data of each row

            while($row = mysqli_fetch_assoc($result)) {

              if($row['email']==$email && $row['password']==$password){
                $parts = explode("@", $email);
                $username = $parts[0];
                session_start();
                $_SESSION["emailS"]=$username;
                $_SESSION["passS"]=$password;
                header("location:index.php");
              }
              else{
                $errormsg="email ana password invalid";
              }

            }}

          
       
      

  }}
?>