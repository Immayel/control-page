<?php
$con= mysqli_connect('localhost','root','','engines');
$engine1= $_POST['engine1'];
$engine2= $_POST['engine2'];
$engine3= $_POST['engine3'];
$engine4= $_POST['engine4'];
$engine5= $_POST['engine5'];
$engine6= $_POST['engine6'];
$sql="INSERT INTO control(engine1,engine2,engine3,engine4,engine5,engine6) VALUES ('$engine1','$engine2','$engine3','$engine4','$engine5','$engine6')";
if (!mysqli_query($con, $sql)){
echo 'Data has not saved';}
else
{ echo 'Data is saved successfully';}
?>