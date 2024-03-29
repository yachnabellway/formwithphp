<?php
// session_start();
// if (!isset($_SESSION["final"])) {
//     header("Location: task.php");
// }

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $firstnam=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $dob=$_POST['dob'];
  $servername= "localhost";
$username="root";
$passward="";
$database= "final";
$conn = mysqli_connect($servername,$username,$passward,$database);
if(!$conn)
{
    die("failesd" . mysqli_connect_error());
}
  else
  {

$sql="INSERT INTO `task3` (`firstname`, `lastname`, `email`, `passward`, `dob`) VALUES ('$firstnam', '$lastname','$email', '$pass', '$dob')";
    $result=mysqli_query($conn,$sql);


if($result)
{
  echo "<h1>inserted succesfully</h1>";
}
else
{
  echo "not succesfully";
} 
  }







}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Sign Up</h1>
                    </div>
                    <div class="card-body">
                        
                        <form action="/HARRY1/task2.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="firstname">FirstName</label>
                                <input type="text"  id="firstname"   name="firstname" class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="lastname">LasttName</label>
                                <input type="text"  id="lastname"  name="lastname" id="lastname"   class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email"  id="email"  class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                            <label for="pass">New Passward</label>
                            <input type="text" name="pass" id="pass"  class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob"    name="dob" class="form-control" />
                            </div>

                           
                            <div class="form-group mb-3">
                                <button type="submit" name="save_date" class="btn btn-primary">Sign -Up</button>
                                <button ><a href="task.php">Login</a></button>
                                <button ><a href="update.php">update</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 

