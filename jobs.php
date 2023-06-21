<?php include 'header.php' ?>
<br><br><br>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $server='localhost';
    $username='root';
    $password='';
    $database='jobs';
    $conn=mysqli_connect($server,$username,$password,$database);
    $sql="Select name,apply,year from candidates";
    $result=mysqli_query($conn,$sql);
    $i=0;

    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo"<tr>";
        echo"<td>".++$i."</td>
             <td>".$rows['name']."</td>
             <td>".$rows['apply']."</td>
             <td>".$rows['year']."</td></tr>";
        
            }
    }
    else{
      echo"";
    }
   
    ?>
   
  </tbody>
</table>
</div>