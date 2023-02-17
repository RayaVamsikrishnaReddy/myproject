<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];


$con =@mysqli_connect('localhost','root','',"sdata");
$query = "insert into stable values('$name','$email','$password','$phone')";
$result = mysqli_query($con,$query);

if($result)
{
    echo "data inserted successfully";
    
}
 else 
 {
   echo "data not inserted succesfully";
 }
 ?>
<html>
    
  <body>
    <?php
    if($result==1){
        ?>
        <h2>Your email id is </h2> <?php echo $email; ?>
        <h2>Your password is </h2> <?php echo $password; ?>
        <?php
    }
    ?>
  </body>
</html>
