<style>
  .article
  {
    background: url(img/back.jpg);
    border-radius: 0%;
    margin-top: 6%;
    margin-left: 8%;
      width:97%;  
      height:84%;
      background-size: 100%
  }
  .card1
  {
    height: 50%;
    width:22%;
    overflow:hidden,scroll;
    color:grey;
    margin-top: 0%;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        display: inline-block;
        background: #331A6F;
  }
  .card2
  {
    height: 50%;
    width:22%;
    overflow:hidden,scroll;
    color:grey;
    margin-left: 1%; 
    margin-top: 6%;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        display: inline-block;
        background: #331A6F;
  }
  .card3
  {
    height: 50%;
    width: 22%;
    overflow:hidden,scroll;
    color:grey;
    margin-left: 1%;
    margin-top: 15%;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        display: inline-block;
        background: #331A6F;
  }
  .card4
  {
    height: 50%;
    width:22%;
    overflow:hidden,scroll;
    color:grey;
    margin-top: 24%;
    margin-left: 1%;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        display: inline-block;
        background: #331A6F ;
  }
  .h
  {
    font-family:Impact, Charcoal, sans-serif;
    font-size: 30px;
    color:#092576;
    background-color: #fff;
    padding: 10px;
  }
  .card1:hover
  {
    opacity:0.9;
    cursor: pointer;
  }
  .card2:hover
  {
    opacity:0.9;
    cursor: pointer;
  }
  .card3:hover
  {
    opacity:0.9;
    cursor: pointer;
  }
  .card4:hover
  {
    cursor: pointer;
  }
</style>

<div class="article">
    <table style="border:none; margin-top: -7%;">
     <tr >
      <td class="card1"><a onclick="admin_home()" style="text-decoration: none;">
        <h4 class="h">About the Portal<br></h4>
        <ul>
        <li>SLIET has been improving since established and has become one of the best Engg college in India.
        <li>SLIET has provided engineers with aptitude of contributing a change in India's development.
        <li>Students are being refined every year by experienced teaching staff and results are improving every year.
        <li>This portal is made by SLIETians to show students' performances every semester.
        </ul>
      </td>
      <td class="card2"><a onclick="admin_teacher()" style="text-decoration: none;">
        <h4 class="h">Faculty<br></h4>
        <ul>
        <li>This link is provided to update the batches taught by Faculty every semester.
        <li>Rights to teacher are provided using this tab like adding and removing them from database.
        <li>Results can be filtered according to departments in which teachers are working.
        <li>Faculty records are maintained every year.<br><br>
        </ul></a>
      </td>
      <td class="card3"><a onclick="admin_student()" style="text-decoration: none;">
      <h4 class="h">Students<br></h4>
      <ul>
        <li>The tab is enlisted to view student's info from any batch in the college.</li>
        <li>Results from every department and their Student's performas can be seen from here.</li>
        <li>Search results can be filtered by batches,Roll no and Name of the students.</li>
        <li>Repeat subjects of a student can be confirmed from here.<br><br></li>
      </ul></a>
      </td>
      <td class="card4"><a onclick="admin_subject()" style="text-decoration: none;">
      <h4 class="h">Academics<br></h4>
      <ul>
        <li>This tab consists of the departments and information about each department in our college.</li>
        <li>From Departments we can get the batches under particular department.</li>
        <li>The subjects of each batch can be seen then.</li>
        <li>Editing of departments,batches as well as their subjects can be done each semester.<br><br><br></li>
      </ul> 
      </td>
</div>
