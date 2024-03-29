


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body  style="background-color:lightblue">
   
  <?php

// session_start();
// if (!isset($_SESSION["final"])) {
//     header("Location: task2.php");
// }
  $servername= "localhost";
  $username="root";
  $passward="";
  $database= "final";
  $conn = mysqli_connect($servername,$username,$passward,$database);
  if(!$conn)
  {
      die("failesd" . mysqli_connect_error());
  }

if($_SERVER['REQUEST_METHOD']=='POST')
{
$login=false;
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="select * from task3 where email='$email'  AND passward='$pass'  ";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
$login=true;
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> you are logged in 
  <button type="button" class="btn-close"      data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
else
{
    echo "incredible";
}

}







?>
    <div class="container mt-5" style="border:8px solid black;height:400px;width:600px;"  >
    <h3 style="margin-left:100px"  >Please enter your email and passward</h3>

<form  action="/Harry1/task.php"  method="post">
  <div class="mb-3"  style="margin-left:100px;">
    <label for="email" class="form-label" style="color:black"   >Email address</label>
    <input type="email" name="email" style="height:50px;width:350px;border: 5px solid black;"  class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3"  style="margin-left:100px;">
    <label for="pass" class="form-label"   >Password</label>
    <input type="password"    name="pass"  class="form-control" style="height:50px;width:350px;/* Shorthand syntax */
border: 5px solid black;"
     id="pass">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary"  style="height:50px;width:200px;margin-left:180px;"     >login</button>
</form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>