
function logout() {
  window.location.replace("script/logout.php");
}
function loginError(){
	$("#loginError").append("WRONG CREDENTIALS");
}
function loginAdmin(){
	$(window).load("main.php");
}
function admin_home() {
  $(".section").load("partials/admin_home.php");
}

function admin_profile() {
  $(".section").load("partials/admin_profile.php");
}

function admin_student() {
  $(".section").load("partials/admin_student.php");
}

function admin_stud() {
  $(".section").load("partials/admin_stud.php");
}

function admin_teacher() {
  $(".section").load("partials/admin_teacher.php");
}

function admin_academics() {
  $(".section").load("partials/admin_academics.php");
}
function student_home() {
  $(".student_section").load("partials/student_home.php");
}

function student_notice() {
  $(".student_section").load("partials/student_notice.php");
}

function student_personal() {
  $(".student_section").load("partials/student_personal.php");
}

function student_message() {//password=message
   $(".student_section").load("partials/student_message.php");
}

function teacher_subjects() {
  $(".section").load("partials/teacher_subjects.php");
}

function teacher_home() {
  $(".section").load("partials/teacher_home.php");
}

function message_success()
 {
  $("#messageBox").html("SUCCESSFUL");
 }
 function messageB()
 {
  $("#messageB").html("Data Updated");
 }

function erase()
{
  $("#messageBox").html("");
}

function addSubject2Teacher(sub,name,code)
{
  $.ajax({
                        url: 'script/addSubject2T.php',
                        type: 'POST',
                         data: { sub: sub, name:name, code:code },
                         success: function() {
                         alert("SUCCESSFUL");
                         $("#"+name).click();
                         }
                     });
}
function addSubject2Batch(sub,batch,clas)
{
  $.ajax({
                        url: 'script/addSub2B.php',
                        type: 'POST',
                         data: { sub: sub, batch:batch, clas:clas},
                         success: function() {
                         alert("SUCCESSFUL");
                         $("#"+batch).click();
                         }
                     });
}
function deleteSubjectTeacher(sub,name)
{
  $.ajax({
                        url: 'script/delSubT.php',
                        type: 'POST',
                         data: { sub: sub, name:name },
                         success: function() {
                         alert("SUCCESSFUL");
                         $("#"+name).click();
                         }
                     });
}
function deleteBatchTeacher(sub,name)
{
  $.ajax({
                        url: 'script/delBatchS.php',
                        type: 'POST',
                         data: { sub: sub, name:name },
                         success: function() {
                         alert("SUCCESSFUL");
                         $("#"+name).click();
                         }
                     });
}

function updateList(subCode) {
  $.ajax({
                        url: 'script/upMarkListT.php',
                        type: 'POST',
                         data: { subCode: subCode },
                         success: function(response) {
                             $("#studTable").html(response);
                         }
                     });
}
function teacherDetails(name,block,code) {
$("#teacherName").html(name);
$("#teacherCode").html(code);
$("#teacherDept").html(block);
  $.ajax({
                        url: 'script/teacherDetails.php',
                        type: 'POST',
                         data: { name: name },
                         success: function(response) {
                             $("#Subjects").html(response);
                             
                         }
                     });
                     
}
function batchDetails(batch, clas) {
$("#batchName").html(batch);
$("#className").html(clas);
  $.ajax({
                        url: 'script/batchDetails.php',
                        type: 'POST',
                         data: { batch: batch},
                         success: function(response) {
                             $("#batchs").html(response);
                             
                         }
                     });
                     
}
function changePass(op,np) {
  $.ajax({
                        url: 'script/changePass.php',
                        type: 'POST',
                         data: { op:op, np:np }
                        ,success: function()
                        {
                          alert(op,np);
                        }
                     });
}

function edit_data(regNo, text, column_name)  
      {  
           $.ajax({  
                method:"POST",  
                url:"script/edit_student.php",  
                data:{regNo:regNo, text:text, column_name:column_name},  
                dataType:"text",
                success:function()
                {
                     message_success(); 
                     setTimeout(function(){erase();},2000);
                }
           });  

      }
function edit_subject(Code ,text, column_name) 
      {
          $.ajax({
            method:"POST",
            url:"script/edit_subject.php",
            data:{Code:Code, text:text, column_name:column_name},
            dataType:"text",
            success:function()
            {
              message_success();
              setTimeout(function(){erase();},2000);
            }
          });
      }     
function editSub(Sub ,text, column_name) 
      {
            $.ajax({
            method:"POST",
            url:"script/editSub.php",
            data:{Sub:Sub, text:text, column_name:column_name},
            success:function()
            {
              message_success();
              setTimeout(function(){erase();},2000);
            }
          });
      }     

function edit_marks(regNo, text, column_name)  
      {  
           $.ajax({  
                method:"POST",  
                url:"script/edit_marks.php",  
                data:{regNo:regNo, text:text, column_name:column_name},  
                dataType:"text",
           });  

           message_success(); setTimeout(function(){erase();},2000);
      }   
function add_grade(Grad, text, column_name)
      {  
           $.ajax({  
                method:"POST",  
                url:"script/addgrade.php",  
                data:{Grad:Grad, text:text, column_name:column_name},  
                dataType:"text",
           });  

           messageB(); setTimeout(function(){erase();},2000);
      }   
function addS(C, N, Cr)
{
  $.ajax({
    method:"POST",
    url:"script/addSubj.php",
    data:{C:C, N:N, Cr:Cr},
    dataType:"text",
  });
  message_success(); setTimeout(function(){erase();},2000);
}

function batchChange(bname)
{
  $.ajax({  
                method:"POST",  
                url:"script/displayBatch.php",  
                data:{bname:bname},
                success:function(response)
                {
                  $("#spaceTable").html(response);
                  $("#studentTable").DataTable({});
                }
           });  
}

function marksWindow(code)
{ 
  $.ajax({  
                method:"POST",  
                url:"script/showMarks.php",  
                data:{code:code},
                success:function(response)
                {
                  var w = window.open();
                  $(w.document.body).html(response);              }
           });
}

function finalResult(classR)
{ 
  $.ajax({  
                method:"POST",  
                url:"script/finalResult.php",  
                data:{classR:classR},
                success:function(response)
                {
                  var w = window.open();
                  $(w.document.body).html(response);              }
           });
}

