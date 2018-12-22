<?php 
include_once '../script/conn.php';

function subjectCall()
{
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
            
$sql = 'SELECT Subject_Code,Subject_Name,Credits FROM subject';
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
  echo '<tr>
           <td  class="CodeCol" data-id="'.$row['Subject_Code'].'">'.$row['Subject_Code'].'</td>
           <td  class="NameCol" data-id="'.$row['Subject_Code'].'"contenteditable>'.$row['Subject_Name'].'</td>
           <td  class="CreditsCol" data-id="'.$row['Subject_Code'].'"contenteditable>'.$row['Credits'].'</td>
           </tr>';
}
}
function noResult()
{
  echo "<h3>NO RESULT FOUND<h3>";
}
 
 function subjectshow()
 {
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql='SELECT Subject_Code,Subject_Name FROM subject';
$result=$conn->query($sql);
while($row = $result->fetch_assoc())
{
  echo'<tr>
      <td>'.$row['Subject_Code'].'</td>
      <td>'.$row['Subject_Name'].'</td>
      </tr>';
}
 }

 function updateStudentTable(){
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
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
           <td class="rollCol" data-id="'.$row['Reg_No'].'" style="background-color:#ccc" contenteditable>'.$rollNo.'</td>
           <td class="regCol" data-id="'.$row['Reg_No'].'" >'.$regNo.'</td>
           <td class="studNameCol" data-id="'.$row['Reg_No'].'" style="background-color:#ccc" contenteditable>'.$studentName.'</td>
           <td>'.$row['Subject1'].'|'.$row['Subject2'].'|'.$row['Subject3'].'|'.$row['Subject4'].'|'.$row['Subject5'].'|'.$row['Subject6'].'</td>
           </tr>';
}

echo "</tbody></table>";

}

function updateTeacherTable(){
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
           
   $sql = 'SELECT Teacher_Code,Teacher_Name,Teacher_Block FROM teacher';
                
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
{
   echo 
       "<tr>
           <td>".$row['Teacher_Block']."</td>
           <td>".$row['Teacher_Code']."</td>
           <td><div id='".$row['Teacher_Name']."'' onclick=teacherDetails('".$row['Teacher_Name']."','".$row['Teacher_Block']."','".$row['Teacher_Code']."')><a>".$row['Teacher_Name']."</a></div></td>
        </tr>";
}
}
function batchSubjects()
{
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT * FROM batch';
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
echo '<tr><td>'.$row['Batch'].'</td>
      <td  class="Co" data-id="'.$row['Class'].'">'.$row['Class'].'</td>
      <td  class="S" data-id="'.$row['Class'].'" contenteditable>'.$row['Subject1'].'</td>
      <td  class="Su" data-id="'.$row['Class'].'" contenteditable>'.$row['Subject2'].'</td>
      <td  class="Sub" data-id="'.$row['Class'].'" contenteditable> '.$row['Subject3'].'</td>
      <td  class="Subj" data-id="'.$row['Class'].'" contenteditable> '.$row['Subject4'].'</td>
      <td  class="Subje" data-id="'.$row['Class'].'" contenteditable> '.$row['Subject5'].'</td>
      <td  class="Subjec" data-id="'.$row['Class'].'" contenteditable> '.$row['Subject6'].'</td>
      <td  class="Subject" data-id="'.$row['Class'].'" contenteditable> '.$row['Subject7'].'</td>
      </tr>';
}
}

function deleteStudent()
{
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_POST['updateStudent']))
{
  
        
                $sql = 'DELETE FROM main where Roll_No="'.$_POST['studentDetail'].'" OR Reg_No="'.$_POST['studentDetail'].'" OR Student_Name="'.$_POST['studentDetail'].'"';
                
                
}
 

}

function updateStudentTableMarks()
{
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
           
   $sql = 'SELECT Batch, Reg_No, Student_Name, Subject_Code, Minor1, Minor2, Quiz, Major, Practical from main NATURAL JOIN marks_theory';
                
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
{
  $regNo = $row['Reg_No'];
  $studentName = $row['Student_Name'];
  $total = $row['Minor1']+$row['Minor2']+$row['Major']+$row['Quiz']+$row['Practical'];
   echo 
       '<tr>
           <td class="batchCol" data-id="'.$row['Reg_No'].'">'.$row['Batch'].'</td>
           <td class="regCol data-id="'.$row['Reg_No'].'" >'.$regNo.'</td>
           <td class="studNameCol" data-id="'.$row['Reg_No'].'" style="background-color:#ccc" contenteditable>'.$studentName.'</td>
           <td>'.$row['Subject_Code'].'</td><td>'.$row['Minor1'].'</td><td>'.$row['Minor2'].'</td><td>'.$row['Quiz'].'</td><td>'.$row['Major'].'</td><td>'.$row['Practical'].'</td><td>'.$total.'</td></tr>';
}
}

function availableSubjects()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT Subject_Code from subject';
$result = $conn->query($sql);
while($row=$result->fetch_assoc())
  echo '<option value="'.$row['Subject_Code'].'" >'.$row['Subject_Code'].'</option>';

}

function availableBatch()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT Batch from batch';
$result = $conn->query($sql);
while($row=$result->fetch_assoc())
{
  echo "<li><a data-toggle='tab' class='batchName' id='".$row["Batch"]."'>".$row["Batch"]."</a></li>";
}
}

function gradeShow()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * from grades order by Max desc';
$result = $conn->query($sql);
while($row=$result->fetch_assoc())
{
  echo '<tr><td data-id="'.$row['Grade'].'">'.$row['Grade'].'</td>
        <td class="Max" data-id="'.$row['Grade'].'" contenteditable>'.$row['Max'].'</td>
        <td class="Min" data-id="'.$row['Grade'].'" contenteditable>'.$row['Min'].'</td></tr>';
}
}

function addSubject()
{
}
?>