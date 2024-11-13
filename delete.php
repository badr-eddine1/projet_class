<?php
include("dataBase.php");
$sql = "DELETE FROM User WHERE id='$_GET[idDeleted]'";
if (mysqli_query($conn, $sql)) {

echo "Record deleted successfully";
header("location:read.php");
} else {

echo "Error deleting record: " .
mysqli_error($conn);}


?>