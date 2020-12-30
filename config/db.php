<?php 
$conn= mysqli_connect("localhost:3308","root","","quanlynoithat");
if($conn){
	mysqli_query($conn, "SET NAMES 'UTF8'");
}
else{
	echo "ket noi that bai";
}
?>