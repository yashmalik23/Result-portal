<?php

session_start();
function updateTeacherSubject()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
$sql = 'SELECT Subject_Code from teacher_subject  where Teacher_Name="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);

echo '<ul class="nav nav-pills">';

while($row = $result->fetch_assoc())
{
	echo '<li><a data-toggle="pill" onclick=updateList("'.$row['Subject_Code'].'")>'.$row['Subject_Code'].'</a></li>';
}
echo "</ul>";
}

function teacherDetailsDept()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
$sql = 'SELECT * from teacher  where Teacher_Name="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
 echo $row['Teacher_Block'];
}

}
function teacherDetailsCode()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
$sql = 'SELECT * from teacher  where Teacher_Name="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
echo $row['Teacher_Code'];
	
}

?>