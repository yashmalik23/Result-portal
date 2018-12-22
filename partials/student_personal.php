
<style>
  .article
  {
    background: url(img/back.jpg);
    border-radius: 0%;
    margin-top: 8%;
    margin-left: 8%;
      width:97%;  
      height:84%;
      background-size: 100%
  }
  .dp
  {
    width: 200px;
    height: 200px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin:0 5px;

  }
  input
  {
    min-height: 30px;
  }
</style>
<script type="text/javascript">
function show()
{
  $('input[type=text]').attr('type','text');
  setTimeout(function(){ $('input[type=text]').attr('type','password'); }, 3000);
}
</script>
<?php  
include_once 'student_function.php';
if(isset($_POST['passSubBtn'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT Password from users where Username="'.$_SESSION['user_id'].'"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row['Password']==$_POST['oldPass'])
  {
      if($_POST['confirmPass']==$_POST['newPass']){
      $sql = 'UPDATE users SET Password="'.$_POST['newPass'].'" where Username="'.$_SESSION['user_id'].'"'; 
      $result = $conn->query($sql);
      echo "<script> alert('UPDATED'); </script>";
      echo '<script>window.location.replace("../index.php");</script>';}
      else 
      {
        echo "<script>alert('PLEASE ENTER CORRECT PASSWORD');</script>";
             }
  }
  else
  {
    echo "<script>alert('PLEASE ENTER CORRECT PASSWORD');</script>";
  }
}

?>

<div class="article">
  <div style="display: inline-flex;">
    <img src="img/logo.jpg" class="dp" style="margin-left:-120px;margin-top: 30px;">
    <div style="display: block; color: #555; display: inline; margin: 30 10px;">
    <?php StudentDetails();?>
    </div>
  </div>
  <hr style="width: 92%;">
  <form id="passChange" style="margin:80px 0 0 -220px; padding:5px; height: 50px; width: 100px;" method="POST" action="partials/teacher_home.php">
  <fieldset>
  <legend>Change Password:</legend>
    <input type="Password" class="form-control" name="oldPass" id="OP" placeholder="Old Password" autocomplete="off" required="required">
    <div class="inut-group">
    <input required="required" type="Password" class="form-control" name="newPass" id="NP" placeholder="New Password">
    </div>
    <div>
    <input type="Password" required="required" class="form-control" name="confirmPass" id="CNP" placeholder="Confirm New Password">
    </div>
    <div>
    <input type="submit" name="passSubBtn" class="btn btn-default" value="CONFIRM" >
  </fieldset>
  </form> 
</div>
