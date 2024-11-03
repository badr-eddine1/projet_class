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
        else if($passV==""){
            $passError="password is required.";
        }
        else if($confipassV==""){
            $confirmPassError="confirm password is required.";
        }
    }


?>