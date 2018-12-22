<?php
session_start();
function minor1()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT Reg_No from main where Roll_No="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$reg=$row['Reg_No'];
$sql='SELECT * from marks_theory where Reg_No="'.$reg.'"';
$result = $conn->query($sql);
echo '<table class="table table-bodered" style="width:50%;">
	  	<thead>
	  		<th>Subject</th>
	  		<th>Marks</th>
	  	</thead>
	  	<tbody>
	  		';
while($row = $result->fetch_assoc())
	echo '<tr><td>'.$row['Subject_Code'].'</td><td>'.$row['Minor1'].'</td></tr>';
echo '</tbody>
	  </table>';
}
function minor2()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT Reg_No from main where Roll_No="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$reg=$row['Reg_No'];
$sql='SELECT * from marks_theory where Reg_No="'.$reg.'"';
$result = $conn->query($sql);
echo '<table class="table table-bodered" style="width:50%;">
	  	<thead>
	  		<th>Subject</th>
	  		<th>Marks</th>
	  	</thead>
	  	<tbody>
	  		';
while($row = $result->fetch_assoc())
	echo '<tr><td>'.$row['Subject_Code'].'</td><td>'.$row['Minor2'].'</td></tr>';
echo '</tbody>
	  </table>';
}
function major()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT Reg_No from main where Roll_No="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$reg=$row['Reg_No'];
$sql='SELECT * from marks_theory where Reg_No="'.$reg.'"';
$result = $conn->query($sql);
echo '<table class="table table-bodered" style="width:50%;">
	  	<thead>
	  		<th>Subject</th>
	  		<th>Marks</th>
	  	</thead>
	  	<tbody>
	  		';
while($row = $result->fetch_assoc())
	echo '<tr><td>'.$row['Subject_Code'].'</td><td>'.$row['Major'].'</td></tr>';
echo '</tbody>
	  </table>';
}
function quiz()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT Reg_No from main where Roll_No="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$reg=$row['Reg_No'];
$sql='SELECT * from marks_theory where Reg_No="'.$reg.'"';
$result = $conn->query($sql);
echo '<table class="table table-bodered" style="width:50%;">
	  	<thead>
	  		<th>Subject</th>
	  		<th>Marks</th>
	  	</thead>
	  	<tbody>
	  		';
while($row = $result->fetch_assoc())
	echo '<tr><td>'.$row['Subject_Code'].'</td><td>'.$row['Quiz'].'</td></tr>';
echo '</tbody>
	  </table>';
}
function practical()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT Reg_No from main where Roll_No="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$reg=$row['Reg_No'];
$sql='SELECT * from marks_theory where Reg_No="'.$reg.'"';
$result = $conn->query($sql);
echo '<table class="table table-bodered" style="width:50%;">
	  	<thead>
	  		<th>Subject</th>
	  		<th>Marks</th>
	  	</thead>
	  	<tbody>
	  		';
while($row = $result->fetch_assoc())
	echo '<tr><td>'.$row['Subject_Code'].'</td><td>'.$row['Practical'].'</td></tr>';
echo '</tbody>
	  </table>';
}
function total()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT Reg_No from main where Roll_No="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$reg=$row['Reg_No'];
$sql='SELECT * from marks_theory where Reg_No="'.$reg.'"';
$result = $conn->query($sql);
echo '<table class="table table-bodered">
	  	<thead>
	  		<th>Subject</th>
	  		<th>Minor 1</th>
	  		<th>Minor 2</th>
	  		<th>Major</th>
	  		<th>Quiz</th>
	  		<th>Practical</th>
	  		<th>Total</th>
	  		<th>Grade</th>
	  		<th>Point</th>
	  	</thead>
	  	<tbody>
	  		';
$sgpa=0;
$totalCredit=0;
while($row = $result->fetch_assoc())
{

	echo '<tr>
     	   <td>'.$row['Subject_Code'].'</td>
	       <td>'.$row['Minor1'].'</td>
	       <td>'.$row['Minor2'].'</td>
	       <td>'.$row['Major'].'</td>
	       <td>'.$row['Quiz'].'</td>
	       <td>'.$row['Practical'].'</td>';
	 $total_mark= ($row['Minor1']+$row['Minor2']+$row['Major']+$row['Quiz'])*0.8+$row['Practical']*0.2;
	      echo "<td>$total_mark</td>";
$sql1='SELECT * from grades where Max>="'.$total_mark.'" AND Min<="'.$total_mark.'"';
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

echo '<td> '.$row1['Grade'].'</td>
      <td> '.$row1['Point'].'</td></tr>';
$sql2='SELECT * from subject where Subject_Code="'.$row['Subject_Code'].'"';
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$sgpa+=($row2['Credits']*$row1['Point']);
$totalCredit+=$row2['Credits'];
      }

$sgpa/=$totalCredit;
echo '</tbody>
	  </table>';
echo '<h3>SGPA='.$sgpa.'</h3>';

}

?>		