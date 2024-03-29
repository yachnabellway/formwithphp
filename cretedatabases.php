<?php

$servername="localhost";
$username="root";
$passward="";


$conn=mysqli_connect($servername,$username,$passward);
if(!$conn)
{
  echo "connection is not succesful";
}
else
{
echo "connection is  succesful";


$sql="CREATE database rani  ";
$res=mysqli_query($conn,$sql);
if($res)
{
    echo "created succesfully";
}
else
{
    echo "not succesfully";
}
}
?>