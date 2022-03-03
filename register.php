
<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
  die("Connection Failed:".$conn->connect_error);
}

 if(isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['phone_no'];
  $password=$_POST['password'];

  $sql="INSERT INTO `users`(`Name`, `email`, `password`,`phone_no`) VALUES ('$name','$email','$password','$number')";
  if(mysqli_query($conn,$sql)){
    echo "Records inserted successfully.";
  }
  else {
    echo "ERROR: Could not be able to execute $sql. ".mysqi_error($conn);
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style media="screen">
body{
background-image: url('bgi.jpg');
background-size: cover;
}
  form{
    background-color: white;
    margin-top: 6em;
    margin-left: 20em;
    margin-right: 10em;
    padding: 30px;
    box-shadow: 10px 10px 8px 10px #888888;
  }
</style>
  </head>
  <body>
    <div class="container">
      <form method="POST">
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="name" required>
        </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber1" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber1" name="phone_no" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" required>
  </div>
  <input type="submit" class="btn btn-primary" name="submit">
  <br>
  Already Registered? <a href="login.php">Login</a>
</form>

    </div>
  </body>
</html>
