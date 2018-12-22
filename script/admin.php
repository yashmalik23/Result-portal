<?php

include 'conn.php';

  function updateAll(){

                $sql = "SELECT Trade, Batch, Reg_No, Roll_No, Student_Name,Password from main order by Roll_No,Reg_No ASC";
                
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
{
   echo 
       '<tr>
           <td>'.$row['Trade'].'</td>
           <td>'.$row['Batch'].'</td>
           <td>'.$row['Roll_No'].'</td>
           <td>'.$row['Reg_No'].'</td>
           <td>'.$row['Student_Name'].'</td>
           <td>'.$row['Password'].'</td>
           <td class="noEXL"><a>Edit</a></td>
           <td class="noEXL"><a>View</a></td>
       </tr>';

   
} 
}




?>