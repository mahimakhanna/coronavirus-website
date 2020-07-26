<?php
include 'db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$symp=$_POST['symptoms1'];


$chk='';
foreach($symp as $chk1){
$chk.=$chk1.",";
}
$insertquery="INSERT INTO cronacase(username,email,mobile,gender,age,symptoms) VALUES( '$username','$email','$mobile','$gender','$symp')";
$query=mysqli_query($con,$insertquery);
if($query)
{
echo "<script>alert('inserted properly')</script>";
}
else
{
echo "<script>
alert('not inserted properly');
</scipt>";
}
}
?>