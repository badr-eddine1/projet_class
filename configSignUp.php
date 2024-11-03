<?php
    $fnError=$lnError=$emailError=$passError=$confirmPassError="";
    if(isset($_POST["submit"])){
        $fnV=$_POST["firstName"];
        $lnv=$_POST["lastName"];
        $emailV=$_POST["emailName"];
        $passV=$_POST["passName"];
        $confipassV=$_POST["ConfipassName"];
        if($fnV==""){
            $fnError="First Name is required.";
        }
        
        else if($lnv==""){
            $lnError="last Name is required.";
        }
        else if($emailV==""){
            $emailError="emailis required.";
        }
        else if (!preg_match("/\w+(@gmail\.com){1}$/",$emailV)){
            $emailError= "email invalid";
          }
        else if($passV==""){
            $passError="password is required.";
        }
        else if(preg_match("/^[A-Z]+/",$passV)){
            $passError="password is not strong.";
        }
        else if($confipassV!=$passV){
            $confirmPassError="pass not match";
        }
        else{
            header("location:login.php");
        }
    }


?>