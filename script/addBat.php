
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$code=$_POST["B"];
$name=$_POST["Cl"];
$sql="INSERT INTO batch"."(Batch,Class)"."VALUES('$code','$name')";
mysqli_query($conn, $sql); 
?>      