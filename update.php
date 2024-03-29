<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php


$servername= "localhost";
  $username="root";
  $passward="";
  $database= "final";
  $conn = mysqli_connect($servername,$username,$passward,$database);
  if(!$conn)
  {
      die("failesd" . mysqli_connect_error());
  }
  else{



    
  }
?>


  <form action="">
    <h1>name</h1>
    <input type="name"  name="email">
    <h1>passward</h1>
    <input type="passward" name=" pass">
    <br>
    <button type="submit">change</button>
  </form>
</body>
</html>