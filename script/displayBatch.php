<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";
$batch = $_POST['bname'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($batch=="All")
{
	

	$sql = 'SELECT Class,Reg_No, Roll_No, Student_Name,Subject1,Subject2,Subject3,Subject4,Subject5,Subject6 from main m NATURAL JOIN batch b where m.Class=b.Class ';
   echo '<table id="studentTable"><thead>
    <tr>
        <th>CLass</th>
        <th>Roll No</th>
        <th>Registration Number</th>
        <th>Name</th>
        <th>Subjects</th>
    </tr>
    </thead>
    <tbody>'; 
                
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
{
  $rollNo = $row['Roll_No'];
  $regNo = $row['Reg_No'];
  $studentName = $row['Student_Name'];
   echo 
       '<tr>
           <td>'.$row['Class'].'</td>
           <td class="rollCol" data-id="'.$row['Reg_No'].'" contenteditable>'.$rollNo.'</td>
           <td class="regCol data-id="'.$row['Reg_No'].'" >'.$regNo.'</td>
           <td class="studNameCol" data-id="'.$row['Reg_No'].'" contenteditable>'.$studentName.'</td>
           <td>'.$row['Subject1'].'|'.$row['Subject2'].'|'.$row['Subject3'].'|'.$row['Subject4'].'|'.$row['Subject5'].'|'.$row['Subject6'].'</td>
           </tr>';
}

echo "</tbody></table>";
echo "<script>$('#singleStudentAdd').css('display','inline');$('#saveChangesButton').css('display','inline');$('#messageBox').show();</script>";
}
else
{
    $sql = 'SELECT Class,Subject1,Subject2,Subject3,Subject4,Subject5,Subject6 FROM batch where Batch="'.$batch.'"';
$result = $conn->query($sql);
echo '<h5><emp>NOTE: </emp>Click on subject code for results.</h5><table class="table table-bordered table-stripped"><thead><tr><th>Class</th><th>Subjects</th><th>Final</th></thead><tbody>';
while($row = $result->fetch_assoc()){
echo 
'<tr>
<td>'.$row['Class'].'</td>
<td><div style="display:inline;" class="subCode" id='.$row['Subject1'].' onclick=marksWindow("'.$row['Subject1'].'")><a>'.$row['Subject2'].'</a></div> |
    <div style="display:inline;" class="subCode" id='.$row['Subject2'].' onclick=marksWindow("'.$row['Subject2'].'")><a>'.$row['Subject2'].'</a></div> |
    <div style="display:inline;" class="subCode" id='.$row['Subject3'].' onclick=marksWindow("'.$row['Subject3'].'")><a>'.$row['Subject3'].'</a></div> |
    <div style="display:inline;" class="subCode" id='.$row['Subject4'].' onclick=marksWindow("'.$row['Subject4'].'")><a>'.$row['Subject4'].'</a></div> |
    <div style="display:inline;" class="subCode" id='.$row['Subject5'].' onclick=marksWindow("'.$row['Subject5'].'")><a>'.$row['Subject5'].'</a></div> |
    <div style="display:inline;" class="subCode" id='.$row['Subject6'].' onclick=marksWindow("'.$row['Subject6'].'")><a>'.$row['Subject6'].'</a></div> |
</td><td><button class="btn" id="'.$row['Class'].'" onclick=finalResult("'.$row["Class"].'")>View</button></td></tr>';

}
echo "<script>$('#saveChangesButton').css('display','none');$('#singleStudentAdd').css('display','none');$('#messageBox').hide();</script>";
}

?>
