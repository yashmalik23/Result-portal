<div class="article" id="tec" style="display: inline-block;">
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
    width: 100%;
  }
  a:hover
  {
    cursor: pointer;
  }
  .article
  {
    top: -85px;
  }
  .dp
  {
    width: 200px;
    height: 200px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin:0 5px;

  }
</style>
<?php
require_once 'admin_functions.php';
?>
<script type="text/javascript">
  $("#tec").ready(function () {
    $('table').DataTable({
      "bLengthChange": false,
      "pageLength": 9
    });
    $("#newBtn").attr('disabled','true');
  });
  function addSubjectTeacher()
  {
    var sub = $("#addSubjTeacher").find(":selected").text();
    var name = $("#teacherName").html();
    var code = $("#teacherCode").html();
    addSubject2Teacher(sub,name,code);
    return false;
  }

  
</script>
<div style="position:absolute; width: 50.5%; height: auto;  border: 1px solid  #ccc; padding: 15px; border-radius: 10px;" >
<table id="teacherTable" >
  <thead>
    <tr>
      <td>Department</td>
      <td>Teacher Code</td>
      <td>Teacher Name</td>
    </tr>
  </thead>
  <tbody>
    <?php updateTeacherTable() ?>
  </tbody>
</table>
</div>
<div id="teacherInfo" class="pull-right" style="position:absolute; right: 0; width: 40.5%; height: 500px; border: 1px solid  #ccc; padding: 15px; border-radius: 10px;">
  
  <div style="display: inline-flex;">
    <img src="img/logo.jpg" class="dp">
    <div style="display: block; color: #555; display: inline; margin: 0 10px;"><h2 id="teacherName"></h2>
    <div>Account Type: Teacher</div>
    <div>Teacher Code: <span id="teacherCode"></span></div>
    <div> Department: <span id="teacherDept"></span> </div>
  </div>
  </div>
  <hr>
  <h4>Subjects:</h4>
  <div id="Subjects">
  </div>
  <form class="form-inline">
  <select id="addSubjTeacher" style="width: 90px;">
    <option value="">Choose</option>
    <?php availableSubjects(); ?>
  </select>
  <button id="newBtn" class="btn btn-success" onclick="return addSubjectTeacher()"><i class="fa fa-plus" ></i></button>
  </form>
  <div class="" style="position: absolute; bottom: 10px;">Note: To add subject select subject and click on <button disabled class="btn btn-success"><i class="fa fa-plus" "></i></button>.<br>Note: To remove subject click on subject code.</div>
</div>
</div>

