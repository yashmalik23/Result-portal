<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";
$sub = $_POST['code'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT Reg_No, Student_Name, Minor1, Minor2, Quiz, Major, Practical from marks_theory NATURAL JOIN main where Subject_Code="'.$sub.'"';
$sub_sql = 'SELECT * from subject where Subject_Code="'.$sub.'"';
$result = $conn->query($sql);
$sub_result = $conn->query($sub_sql);
$sub_row=$sub_result->fetch_assoc();
echo "<center><h3>".$sub_row['Subject_Code'].": ".$sub_row['Subject_Name']."</h3></center>
      <table style='width:100%; text-align:center;' border=1>
      <caption><b>Clt+P <b>to print the result </caption>
      <thead><tr>
      <th>Registration Code</th>
      <th>Student Name</th>
      <th>Minor1</th>
      <th>Minor2</th>
      <th>Quiz</th>
      <th>Practical</th>
      <th>Major</th>
      <th>Total</th>
      <th>Grade</th>
      </theady><tbody>";
while($row = $result->fetch_assoc())
{
   $total = $row['Minor2']+$row['Minor1']+$row['Major']+$row['Quiz']+$row['Practical'];
   $new_sql = 'SELECT Grade from grades where Max>='.$total.' AND Min<='.$total.'';
   $new_result = $conn->query($new_sql);
   $new_row = $new_result->fetch_assoc();
   $grade = $new_row['Grade'];
   echo '<tr>
         <td>'.$row['Reg_No'].'</td>
         <td>'.$row['Student_Name'].'</td>
         <td>'.$row['Minor1'].'</td>
         <td>'.$row['Minor2'].'</td>
         <td>'.$row['Quiz'].'</td>
         <td>'.$row['Practical'].'</td>
         <td>'.$row['Major'].'</td>
         <td>'.$total.'</td>
         <td>'.$grade.'</td>
         </tr>';
}
echo "</tbody></table>";
?>
