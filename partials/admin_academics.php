<div class="article" id="aca" style="overflow: auto;">
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
.floating-box {
    float: left;
    width: 46%;
    height: auto;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px;   
}
</style>
<script type="text/javascript">
  $("#aca").ready(function(){
    $('table.active').DataTable({
      "bLengthChange": false,
      "pageLength": 7,
      "ordering": false
    });

  });
$(document).on('blur', '.NameCol', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='saveChanges']").click( function() {
           edit_subject(id, text, "Subject_Name");  });
      });
$(document).on('blur', '.CreditsCol', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='saveChanges']").click( function() {
           edit_subject(id, text, "Credits");  });
      });
$(document).on('blur', '.Min', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='saveChange']").click( function() {
           add_grade(id, text, "Min");  });
      });

$(document).on('blur', '.Max', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='saveChange']").click( function() {
           add_grade(id, text, "Max");  });
      });
$(document).on('blur', '.S', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();
           $("input[name='save']").click( function() {
           editSub(id, text, "Subject1"); });
      });
$(document).on('blur', '.Su', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='save']").click( function() {
           editSub(id, text, "Subject2");  });
      });
$(document).on('blur', '.Sub', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='save']").click( function() {
           editSub(id, text, "Subject3");  });
      });
$(document).on('blur', '.Subj', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='save']").click( function() {
           editSub(id, text, "Subject4");  });
      });
$(document).on('blur', '.Subje', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='save']").click( function() {
           editSub(id, text, "Subject5");  });
      });
$(document).on('blur', '.Subjec', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='save']").click( function() {
           editSub(id, text, "Subject6");  });
      });
$(document).on('blur', '.Subject', function(){  
           var id = $(this).data("id");  
           var text = $(this).text();  
           $("input[name='save']").click( function() {
           editSub(id, text, "Subject7");  });
      });
 function message()
 {
  alert('Data updated');
 }
 function addBatchTeacher()
  {
    var sub = $("#addBatchTeacher").find(":selected").text();
    var batch = $("#batchName").html();
    var clas = $("#className").html();
    addSubject2Batch(sub,batch,clas);
    return false;
  }
  $("#post-btn").click(function(){  

        $.post("script/addSubj.php", $("#reg-form").serialize(),function(data){
            $("#sunject_ic").click();
        });
      });
$("#post-bt").click(function(){  

        $.post("script/addBat.php", $("#sub-form").serialize(),function(data){
            alert('Data updated');
           $("#sunject_ic").click();
                   });
    });
 </script>
<div style="width: 100%;">
<ul class="nav nav-tabs">
  <li class="active" id="hi"><a  data-toggle="tab" href="#home">Subjects</a></li>
  <li ><a id="bat" data-toggle="tab" href="#batchMenu">Batch</a></li>
  <li id="grad"><a  data-toggle="tab" href="#gradeMenu">Grades</a></li>
</ul>
<div class="tab-content">  <div id="home" class="tab-pane fade in active">
    <div style="">
      <form class="form-inline" method="POST" id="reg-form">
        <b>Add New Subject:  </b>
        <input type="text" id="C"  name="C" placeholder="Code">
        <input type="text" id="N" name="N" placeholder="Name">
        <input type="text" id="Cr" name="Cr" placeholder="Credits">
        <input type="button" id="post-btn" class="btn btn-primary" value="Add">
      </form>
    <div style="display: inline; left:40%; ,margin-bottom: 10px; position: absolute; "><h3 style="display: inline;"><span id="messageBox" >Subjects </span></h3></div>
     <input id="saveChangesButton" type="button"  style="margin-bottom: 10px;" class="btn btn-primary pull-right" name="saveChanges" value="Save Changes">
    <table class="active" id="subjectMenu">
      <thead>
        <tr>
          <th>Subject Code</th>
          <th>Subject Name</th>
          <th>Credits</th>
        </tr>
      </thead>
      <tbody>
          <?php subjectCall (); ?>
      </tbody>
    </table>
    </div>
  </div>
  <div id="batchMenu" class="tab-pane fade">
    <div id="pos" class="floating-box">
    <form class="form-inline" method="POST" id="sub-form">
        <b>Add New Batch:  </b>
        <input type="text" id="B"  name="B" placeholder="Batch">
        <input type="text" id="Cl" name="Cl" placeholder="Class">
        <input type="button" id="post-bt" class="btn btn-primary" value="Add">
    </form>
    <div style="display: inline; left:20%; ,margin-bottom: 10px; position: absolute; "><h3 style="display: inline;"><span id="messageBox" >Batches </span></h3></div>    
        <input id="saveChangesButton" type="button"  style="margin-bottom: 10px;" class="btn btn-primary pull-right" name="save" value="Save Changes">
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
    </div>
    <div  id="pos" class="floating-box" >
    <table style=" overflow: scroll;" class="active" class="table table-stripped">
    <thead>
      <tr>
      <th>Code</th>
      <th>Subject</th>
      </tr>
    </thead>
    <tbody>
      <?php subjectshow();?>
    </tbody>
    </table>
    </div>
</div>
  <div id="gradeMenu" class="tab-content fade" style="width: 50%;">
  <div style="display: inline; left:16%; ,margin-bottom: 10px; position: absolute; "><h3 style="display: inline;"><span id="messageB" >Subjects </span></h3></div>
     <input id="saveChangesButton" type="button"  style="margin-bottom: 10px;" class="btn btn-primary pull-right" name="saveChange" value="Save Changes">
     <table id="gradeTable" class=" table table-stripped">
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
  </div>    
</div>
