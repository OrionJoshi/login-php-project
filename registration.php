<?php 

	session_start();

	header('location:login.php');

	$conn = mysqli_connect('localhost','root','','sessionpractical');

	if($conn){
		echo "database connected";
	}
	else{
		echo "No connected";
	}

	$name=$_POST['user'];
	$pass=$_POST['password'];

	$q="SELECT * FROM signin where name='$name' && password='$pass'";

	$result=mysqli_query($conn,$q);

	$num = mysqli_num_rows($result);

	if($num == 1){

		echo "Duplicate Data";
	}else{

		$qy="INSERT INTO signin(name,password) VALUES ('$name','$pass')";
		mysqli_query($conn,$qy);
	}


 ?>