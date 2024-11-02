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