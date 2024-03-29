<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$email=$_POST['email'];
$pass=$_POST['pass'];

$servername="localhost";
$username="root";
$passward="";
$database="db2";

$conn=mysqli_connect($servername,$username,$passward,$database);
if(!$conn)
{
  echo "connection is not succesful";
}
else
{
echo "connection is  succesful";
}
}?>