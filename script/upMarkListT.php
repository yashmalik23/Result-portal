<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";

session_start();
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo '<table id="studentTable">
<thead>
        <tr>
            <td>Registration Number</td>
            <td>Student Name</td>
            <td>Minor 1</td>
            <td>Minor 2</td>
            <td>Quiz</td>
            <td>Major</td>
            <td>Practical</td>
            <td>Total</td>
        </tr>
    </thead>
    <tbody>';

	$sql = 'SELECT Reg_No, Minor1, Minor2, Quiz, Major, Practical, Student_Name from main Natural JOIN marks_theory where Subject_Code="'.$_POST['subCode'].'"';
	$_SESSION['subject']=$_POST['subCode'];
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		$total = $row['Quiz']+$row['Minor1']+$row['Major']+$row['Minor2']+$row['Practical'];
		echo '<tr>
		     <td >'.$row['Reg_No'].'</td>
		     <td>'.$row['Student_Name'].'</td>
		     <td class="minor1 mark" data-id="'.$row['Reg_No'].'"'.' contenteditable>'.$row['Minor1'].'</td>
		     <td class="minor2 mark" data-id="'.$row['Reg_No'].'" contenteditable>'.$row['Minor2'].'</td>
		     <td class="quiz mark" data-id="'.$row['Reg_No'].'" contenteditable>'.$row['Quiz'].'</td>
		     <td class="major mark" data-id="'.$row['Reg_No'].'" contenteditable>'.$row['Major'].'</td>
		     <td class="practical mark" data-id="'.$row['Reg_No'].'" contenteditable>'.$row['Practical'].'</td>
		     <td>'.$total.'</td>
		     </tr>';
	}


echo "</tbody></table>";
?>