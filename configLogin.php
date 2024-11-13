<?php
include("dataBase.php");
$valide=0;
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
            $sql = "SELECT email, pass FROM User";
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              // Parcours de chaque ligne
              while ($row = mysqli_fetch_assoc($result)) {
                if ($row['email'] == $email && password_verify($password, $row['pass'])) {// pour un mot de passe haché, utilise password_verify
                      $valid = 1;
                      $parts = explode("@", $email);
                      $username = $parts[0];
                      session_start();
                      $_SESSION["emailS"] = $username;
                      $_SESSION["passS"] = $password;
                      header("location:read.php");
                      exit;
                  }
              }
          
              if ($valide== 0) { // Correction de l'erreur de variable
                  $errormsg = "email and password invalid";
              }
          }

          
       
      

  }}
?>