<?php include 'config.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 <style>

 .head{
  height: 150px;
font-size: 50px;
text-align: center;
background-image: url(pic.png);
 }
  .grid-container {
    display: grid;
    gap: 50px 100px;

    grid-template-columns: 1fr 1fr 1fr;
  grid-auto-flow: column;
}
 .jobs{
  width: 370px;
    box-shadow: 10px 10px 8px #888888;
 }
 </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <title>Document</title>
</head>
<body>
  <div class="head">
   Job portal
  </div>
  <br>
  <br>
  <div class="grid-container" style="width:30px;">
<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

$sql="SELECT id,cname,position,jdesc,skills,CTC FROM jobs";
$result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
              <div class="jobs">
              
              <h4 style="text-align=center;">'.$rows['position'].'</h4>
              <h4>'.$rows['cname'].'</h4>
              <h4>'.$rows['Jdesc'].'</h4>
              <h4><b>Skills Required:</b>'.$rows['skills'].'</h4>
              <h4><b>CTC:</b>'.$rows['CTC'].'</h4>
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
              Apply Now
            </button>
           
        </div>';
        
            }
    }
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Job Application</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label></label>
            <input type="text" class="form-control" name="name">
          </div>
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Applying For</label></label>
            <input type="text" class="form-control" name="appl">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout</label></label>
            <input type="text" class="form-control" id="recipient-name" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="apply">Apply</button></button>
        </form>

      </div>
    </div>
  </div>
</div>

 </div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>