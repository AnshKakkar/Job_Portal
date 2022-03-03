<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'config.php' ?>
  <head>
    <meta charset="utf-8">
    <title>Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style media="screen">

    .navbar {
      overflow: hidden;
      background-color: #333;
      position: fixed;
      top: 0;
      width: 100%;
    }
    h1,p{
      color: #fff;
    }
    .jobs {
      border: 1px solid black;
      box-shadow: 5px 5px 4px 5px grey;
      margin: 10px;
      padding: 10px;
    }
    </style>
  </head>
  <body>
    <!-- <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div>
<img src="" alt="" class="img-fluid" width="">
</div>
    </div> -->
    <div class="row">
      <div class="col-12">
        <div class="jumbotron jumbotron-fluid" style="background-image: url('download.jpg'); background-size:cover;">
          <div class="container">
            <h1 class="display-4">Job Portal</h1>
            <p class="lead">Best Jobs available matching your skills</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
      $sql="SELECT cname,position,skills,CTC FROM jobs";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo'
          <div class="col-md-4">
          <div class="jobs">
          <h3 style="text-align: center;">'.$rows['position'].'</h3>
          <h4 style="text-align: center;">'.$rows['cname'].'</h4>
          <p style="color:black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
          <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
          <button type="button" class="collapsible" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
          </div>
          </div>';
        }}

       ?>
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" id="recipient-name" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualifications</label>
            <input type="text" class="form-control" id="recipient-name" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" id="recipient-name" name="year">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="smt">Apply</button>
              </form>
      </div>
    </div>
  </div>
</div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
