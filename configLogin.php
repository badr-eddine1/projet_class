<?php
$emailError = $passwordError = "";

if( isset($_POST['submit']) ){

    $email = $_POST['emailName'];
    $password = $_POST['passName'];
    if ($email == "") {
        $emailError = "Email is required.";
        
    } 
    
      
     else if (!preg_match("/\w+(@gmail\.com){1}$/",$email)){
        $emailError= "email invalid";
      }
    

    else if ($password == "") {
        $passwordError = "Password is required.";
      
    } 
    
      
    else if(strlen($password)<=8){
        $passwordError="the password must containe 8 chars";
      }
    
      else{
        $parts = explode("@", $email);
        $username = $parts[0];
        session_start();
        $_SESSION["emailS"]=$username;
        $_SESSION["passS"]=$password;
        header("location:home.php");
      }

  }
?>