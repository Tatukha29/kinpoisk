<?php
   $connect = mysqli_connect('127.0.0.1','root','','tanya29');
	$result=mysqli_query($connect, "SELECT * FROM film");
	$result2=mysqli_query($connect, "SELECT * FROM users1");
		//$res=$result->fetch_assoc();
		header('Location:http://localhost/tanya29/kinopoisk/film2.php?id='.$_POST['id'].'&id2='.$_POST['userid'].'');
	//echo $_POST['userid'];
		?>