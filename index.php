
<?php include 'header.php' ?>
<?php include 'config.php'?>

<!-- Page content -->
<br><br><br>
<div class="content">
<p>
  <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Post Job
</button>
</p>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label"> Job Description</label>
    <input type="text" class="form-control" name="JobDesc">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" name="CTC">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">skills</label>
    <input type="text" class="form-control" name="skills">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select cname,position,CTC from jobs";
    $result=mysqli_query($conn,$sql);
    $i=0;

    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo"<tr>";
        echo"<td>".++$i."</td>
             <td>".$rows['cname']."</td>
             <td>".$rows['position']."</td>
             <td>".$rows['CTC']."</td></tr>";
        
            }
    }
    else{
      echo"";
    }

   ?>
  </tbody>
</table>
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>