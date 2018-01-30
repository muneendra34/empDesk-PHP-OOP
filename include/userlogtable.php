<?php
include_once 'dbConnect.php';
$db=new dbConnect();
$uu=$_SESSION['uname'];
$sql="select * from log where username='$uu'";
$result=  mysqli_query($db->con(), $sql);
?>

<div class="box-body">
          <table id="myTable" class="display" >
                  <thead>
                 
                  <th>Date</th>
                  <th>In_time</th>
                  <th>Out_time</th>
                  
              </thead>
              <tbody>
                  <?php
                  while($row=  mysqli_fetch_assoc($result))
                  {
                    ?>  
              <tr>
                      
                      <td><?=$row['date']?></td>
                      <td><?=$row['in_time']?></td>
                      <td><?=$row['out_time']?></td>
                      
                    
              </tr>
                  <?php
                      }
                  ?> 
              </tbody>
          </table></div>

