<?php
include("dataBase.php");
    $errorMssage=$successmsg="";
    if(isset($_POST["submit"])){
        $fnV=$_POST["firstName"];
        $lnv=$_POST["lastName"];
        $emailV=$_POST["emailName"];
        $passV=$_POST["passName"];
        $confipassV=$_POST["ConfipassName"];
        if(empty($fnV) || empty($lnv)||empty($emailV)||empty($passV)||empty($confipassV)){
            $errorMssage="input is required";
        }
        else if (!preg_match("/\w+(@gmail\.com){1}$/",$emailV)){
            $errorMssage= "email invalid";
          }
     
        else if(!preg_match("/^[A-Z]+/",$passV)){
            $errorMssage="password must containe capital letter !!.";
        }
        else if($confipassV!=$passV){
            $errorMssage="pass not match";
        }
        else{
            $password = password_hash($passV,PASSWORD_DEFAULT);

            $sql = "INSERT INTO Users (firstname,lastname, email,password)

            VALUES ('$fnV', '$lnv','$emailV','$password')";

            if (mysqli_query($conn, $sql)) {

            $successmsg= "New record created successfully";

            } else {

            $errorMssage= "Error: " . $sql . "<br>" .
            mysqli_error($conn);

}
        }
    }


?>