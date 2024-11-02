<?php
$emailError = $passwordError = "";

if( isset($_POST['submit']) ){

    $email = $_POST['emailName'];
    $password = $_POST['passName'];
    if (empty($email)) {
        $emailError = "Email is required.";
        
    } 

    if (empty($password)) {
        $passwordError = "Password is required.";
      
    } 
   
  }
?>