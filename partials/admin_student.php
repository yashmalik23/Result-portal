<div class="article">
<style>
  table
  {
    text-align: left;
    width: 100%;
    max-height: 400px;
        overflow: scroll;
  }
  form
  {
    text-align: left;
  }
  .student
  {
    text-align: center;
  }
  a:hover
  {
    cursor: pointer;
  }
  .article
  {
    top: -85px;
  }
</style>
<script type="text/javascript">
  $(document).ready(function () {
    $('#studentTable').DataTable({
      "aaSorting":[[2,'asc'],[3,'asc']]
    });0
     
  });
$(document).on('blur', '.rollCol', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='saveChanges']").click( function() {
           edit_data(id, text, "Roll_NO");  });
      });
$(document).on('blur', '.studNameCol', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $(this).css("background-color:#ccc");
           $("input[name='saveChanges']").click( function() {
           edit_data(id, text, "Student_Name");  });
      });
 function message()
 {
  alert('Data updated');
 }
</script>
<?php
require_once 'admin_functions.php';
require_once '../script/mod.php';
?>
  
    <button class="btn btn-seconday" type="button"  data-toggle="modal" data-target="#newStudentMod">Register New Batch</button>
    <button class="btn btn-seconday" type="button" data-toggle="modal" data-target="#newStudentModal">Add Single Student</button>
    <span style="margin: 0 100px; "></span>
    <button id="view1btn" class="btn btn-success" data-parent="#panels" data-toggle="collapse" data-target="#view1">View 1</button>
    <button id="view2btn" class="btn btn-success" data-parent="#panels" data-toggle="collapse" data-target="#view2">View 2</button>
    <input type="button" class="btn btn-primary pull-right" name="saveChanges" value="Save Changes">
 
 <hr>
 <div class="collapse-in" id="view1">
  <table id="studentTable" class="display" >
    <thead>
    <tr>
        <th>Department</th>
        <th>Batch</th>
        <th>Roll No</th>
        <th>Registration Number</th>
        <th>Name</th>
        <th>Subjects</th>
      </tr>
        </thead>
        <tbody>
          
           <?php
            updateStudentTable();
           ?> 
          
        </tbody>
  </table>
 </div>
 <div class="collapse" id="view2">
  <table id="markTable" class="display" >
    <thead>
    <tr>
        <th>Batch</th>
        <th>Registration Number</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Minor 1</th>
        <th>Minor 2</th>
        <th>Quiz</th>
        <th>Major</th>
      </tr>
        </thead>
        <tbody>
          
           <?php
            updateStudentTableMarks();
           ?> 
          
        </tbody>
  </table>
 </div> 

<!-- Button trigger modal -->
<div class="modal fade" id="newStudentModal" role="dialog" aria-labelledby="myModalLabel" style="width:20%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Student</h4>
      </div>
      <div class="modal-body" style="">
        <form class="student" name="newStudentForm" method="POST" action="script/rmodal.php">
          <input type="text" class="form" name="newStudentDept" placeholder="Department"><br>
          <input type="text" class="form" name="newStudentBatch" placeholder="Batch"><br>
          <input type="text" class="form" name="newStudentName" placeholder="Student Name"><br>
          <input type="text" class="" name="newStudentReg" placeholder="Registration Number"><br>
          <input type="text" class="" name="newStudentRoll" placeholder="Roll No"><br>
          <button type="Submit" class="btn btn-primary" value="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal 
<div class="modal fade" id="newStudentMod" role="dialog" aria-labelledby="myModalLabel" style="width:45%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Batch</h4>
      </div>
      <div class="modal-body" style="width: 150%;">
        <form class="" name="newStudentForm" method="POST" action="script/mod.php">
          <input type="text" class="form" name="newStudentDept" placeholder="Department">
          <input type="text" class="form" name="newStudentBatch" placeholder="Batch"><br>
          1.<input type="text" class="form" name="newStudentName" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll" placeholder="Roll No"><br>
          2.<input type="text" class="form" name="newStudentName1" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg1" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll1" placeholder="Roll No"><br>
          3.<input type="text" class="form" name="newStudentName2" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg2" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll2" placeholder="Roll No"><br>
          4.<input type="text" class="form" name="newStudentName3" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg3" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll3" placeholder="Roll No"><br>
          5.<input type="text" class="form" name="newStudentName4" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg4" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll4" placeholder="Roll No"><br>
          6.<input type="text" class="form" name="newStudentName5" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg5" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll5" placeholder="Roll No"><br>
          7.<input type="text" class="form" name="newStudentName6" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg6" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll6" placeholder="Roll No"><br>
          8.<input type="text" class="form" name="newStudentName7" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg7" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll7" placeholder="Roll No"><br>
          9.<input type="text" class="form" name="newStudentName8" placeholder="Student Name">
          <input type="text" class="" name="newStudentReg8" placeholder="Registration Number">
          <input type="text" class="" name="newStudentRoll8" placeholder="Roll No"><br>
          <button type="Submit" class="btn btn-primary" value="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
-->
</div>