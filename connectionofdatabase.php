<?php
echo "welcome to the stage where we are ready to get connected to a database";  " <br>";
$servername= "localhost";
$username="root";
$passward="";
$database= "yachna";
$conn = mysqli_connect($servername,$username,$passward,$database);
if(!$conn)
{
    die("failesd" . mysqli_connect_error());
}
  echo   "<br>";
echo "successful";
// $sql="CREATE DATABASE db8";
// $result=mysqli_query($conn,$sql);
// echo  "the result is".   var_dump ($result);
// echo "<br>";

// if($result)
// {
//     echo "the db was created";
// }
// else
// echo "the db was not created";

// $sql= "CREATE TABLE `tumn` (`id` INT(11) NOT NULL , `num` INT(11) NOT NULL , `roll` INT(6) NOT NULL , `time` DATETIME(5) NOT NULL )";
// $result=mysqli_query($conn,$sql);
// echo  "the result is".   var_dump ($result);
// echo "<br>";

// if($result)
// {
//     echo "the db was created";
// }
// else
// echo "the db was not created";
$f=61;
$s=93;
$sql= "INSERT INTO `tum` ( `num`, `roll`) VALUES ( $f, $s)";

$result=mysqli_query($conn,$sql);
echo  "the result is".   var_dump ($result);
if($result)
{
    echo "the values are inserted";
}
else
echo "not inserted";

?>