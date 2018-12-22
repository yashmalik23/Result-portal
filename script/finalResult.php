<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";
$class = $_POST['classR'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * from batch where Class="'.$class.'"';
$result = $conn->query($sql);
$row=$result->fetch_assoc();
echo "<center><h3>".$row['Batch'].": ".$class."</h3></center>
      <table style='width:100%; text-align:center;' border=1>
      <caption><b>Clt+P <b>to print the result </caption>
      <thead><tr>
      <th rowspan='2'>Registration Number</th>
      <th rowspan='2'>Student Name</th>
      <th colspan='2'>".$row['Subject1']."</th>
      <th colspan='2'>".$row['Subject2']."</th>
      <th colspan='2'>".$row['Subject3']."</th>
      <th colspan='2'>".$row['Subject4']."</th>
      <th colspan='2'>".$row['Subject5']."</th>
      <th colspan='2'>".$row['Subject6']."</th>
      <th rowspan='2'>SGPA</th>
      <tr>
      <tr>
      <td></td><td></td>
      <td>Grade</td><td>Points</td>
      <td>Grade</td><td>Points</td>
      <td>Grade</td><td>Points</td>
      <td>Grade</td><td>Points</td>
      <td>Grade</td><td>Points</td>
      <td>Grade</td><td>Points</td>
      </tr>
      </theady><tbody>";

$sql = 'SELECT Minor1+Minor2+Quiz+Practical+Major as Total from marks_theory where Subject_Code="'.$row['Subject1'].'"';
$result = $conn->query($sql);
$sub1 = array();
while($row=$result->fetch_assoc())
{
   $sub1=$row['Total'];
}
$sql = 'SELECT Minor1+Minor2+Quiz+Practical+Major as Total from marks_theory where Subject_Code="'.$row['Subject2'].'"';
$result = $conn->query($sql);
$sub2 = array();
while($row=$result->fetch_assoc())
{
   $sub2=$row['Total'];
}
$sql = 'SELECT Minor1+Minor2+Quiz+Practical+Major as Total from marks_theory where Subject_Code="'.$row['Subject3'].'"';
$result = $conn->query($sql);
$sub3 = array();
while($row=$result->fetch_assoc())
{
   $sub3=$row['Total'];
}
$sql = 'SELECT Minor1+Minor2+Quiz+Practical+Major as Total from marks_theory where Subject_Code="'.$row['Subject4'].'"';
$result = $conn->query($sql);
$sub4 = array();
while($row=$result->fetch_assoc())
{
   $sub4=$row['Total'];
}
$sql = 'SELECT Minor1+Minor2+Quiz+Practical+Major as Total from marks_theory where Subject_Code="'.$row['Subject5'].'"';
$result = $conn->query($sql);
$sub5 = array();
while($row=$result->fetch_assoc())
{
   $sub5=$row['Total'];
}
$sql = 'SELECT Minor1+Minor2+Quiz+Practical+Major as Total from marks_theory where Subject_Code="'.$row['Subject6'].'"';
$result = $conn->query($sql);
$sub6 = array();
while($row=$result->fetch_assoc())
{
   $sub6=$row['Total'];
}
$sql ='SELECT COUNT(*) AS C from main where Class="'.$class.'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$num = $row['C'];
while($num>0)
{
   echo '<tr>
   <td></td>
   <td></td>
   <td colspan="2">'.$sub1['0'].'</td>
   <td colspan="2">'.$sub2['0'].'</td>
   <td colspan="2">'.$sub3['0'].'</td>
   <td colspan="2">'.$sub4['0'].'</td>
   <td colspan="2">'.$sub5['0'].'</td>
   <td colspan="2">'.$sub6['0'].'</td>
   <td></td></tr>';
   $num-=1;
}

?>
