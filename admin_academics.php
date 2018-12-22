<div class="article" id="aca">
<?php
  require_once 'admin_functions.php';
?>
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
  .panel
  {
    margin:2px;
    padding: 10px;
    border-radius: 10px;
    border:1px solid #ccc;
  }
  input
  {
    min-height: 30px;
  }
</style>
<script type="text/javascript">
  $(".aca").ready(function(){
    $('table.active').DataTable({
      "bLengthChange": false,
      "pageLength": 9,
      "ordering": false
    });
  });
  function addSubjectClass(name)
  {
    var sub = $("#addSubjectBatch").find(":selected").text();
    addSubject2Class(sub,name);
    return false;
  }
</script>
<div style="width: 100%;">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Subjects</a></li>
  <li><a data-toggle="tab" href="#batchMenu">Batch</a></li>
  <li><a data-toggle="tab" href="#gradeMenu">Grades</a></li>
  <li class="pull-right"><a data-toggle="tab" href="#addSubject">Add Subjects</a></li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div style="">
    <table class="active">
      <thead>
        <tr>
          <th>Subject Code</th>
          <th>Subject Name</th>
          <th>Credits</th>
        </tr>
      </thead>
      <tbody>
          <?php subjectCall(); ?>
      </tbody>
    </table>
    </div>
  </div>
  <div id="batchMenu" class="tab-pane fade">
    <div>
    <table style="width: 60%; display: inline;" class="table table-stripped">
      <thead>
        <tr>
          <th>Batch</th>
          <th>Class</th>
          <th>Subjects</th>
        </tr>
      </thead>
      <tbody>
        <?php batchSubjects(); ?>
      </tbody>
    </table>
    <div style="display: inline; margin:10px; padding: 10px; border:1px solid #ccc; border-radius: 10px;">
      <form>
        

        
      </form>
    </div>
    </div>
  </div>
  <div id="gradeMenu" class="tab-content fade" style="width: 50%;">
    <table id="gradeTable" class="active table table-stripped">
      <thead>
        <tr>
          <th>Grade</th>
          <th>Max Score</th>
          <th>Min Score</th>
        </tr>
      </thead>
      <tbody>
        
          <?php gradeShow() ?> 
        
      </tbody>
    </table>
  </div>
  <div id="addSubject" class="tab-pane fade" >
      <form class="form-inline" >
        <b>Add New Subject:  </b>
        <input type="text" id="newSubjectCode" placeholder="Code">
        <input type="text" id="newSubjectName" placeholder="Name">
        <input type="submit" class="btn btn-primary" onclick="return addSubject()" value="Add">
      </form>
    </div>
</div>         
</div>    
</div>
