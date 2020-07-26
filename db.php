<?php


$server='localhost';
$user='root';
$password='';
$db='cronadb';
$con=mysqli_connect($server,$user,$password,$db);
if($con){
?>
<script>
alert("connection establish");
</scipt>



<?php
}else
{
?>

<script>
alert("connection not establish");
</scipt>

<?php
}
?>
