<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$email=$_GET['email'];
$password=$_GET['password'];
$con =@mysqli_connect('localhost','root','','sdata');
$query = "select email, password from stable";
$result= mysqli_query($con, $query);
$count=mysqli_num_rows($result);
echo $count;