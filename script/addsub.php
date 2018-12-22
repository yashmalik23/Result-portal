<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$Subc = $_POST['SubjectCode'];
$Subn = $_POST['SubjectName'];
$cred = $_POST['Credits'];
$sql = "INSERT into subject "."VALUES('$Subc,$Subn,$cred')";
  mysqli_query($conn,$sql);
?>