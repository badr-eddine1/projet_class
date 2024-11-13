<?php

$servername = "localhost";
$username = "root";
$pass = "";

$conn = mysqli_connect($servername, $username,$pass);

// if (!$conn) {

// die("Connection failed: " .
// mysqli_connect_error());

// }

// echo "Connected successfully";
// $sql = "CREATE DATABASE gsapp";

// if (mysqli_query($conn, $sql)) {

// echo "Database created successfully";

// } else {

// echo "Error creating database: " .
// mysqli_error($conn);

// }
mysqli_select_db($conn,'gsapp');
// $query = "
// CREATE TABLE User (

// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY
// KEY,

// firstname VARCHAR(30) NOT NULL,

// lastname VARCHAR(30) NOT NULL,

// email VARCHAR(50) UNIQUE,

// pass VARCHAR(80),

// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// ON UPDATE CURRENT_TIMESTAMP

// )

// ";
// if (mysqli_query($conn, $query)) {

//     echo "Table user created successfully";
    
//     } else {
    
//     echo "Error creating table: " .
//     mysqli_error($conn);
    
//     }


?>