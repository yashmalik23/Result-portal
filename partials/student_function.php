<?php

function StudentDetails()
{session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
$sql = 'SELECT * from main  where Roll_No	="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<h2>".$_SESSION['user_id']."</h2><div>Student Name:".$row['Student_Name']."</div><div>Trade:".$row['Trade']."<div><div>Class:".$row['Class']."</div><div>Registration Number:".$row['Reg_No']."</div>";
}
?>