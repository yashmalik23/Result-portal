
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$code=$_POST["C"];
$name=$_POST["N"];
$credit=$_POST["Cr"];
$sql="INSERT INTO subject"."(Subject_Code,Subject_Name,Credits)"."VALUES('$code','$name','$credit')";
mysqli_query($conn, $sql); 
?>      