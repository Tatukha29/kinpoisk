<?php       
$connect = mysqli_connect('127.0.0.1','root','','tanya29');
mysqli_query($connect, "DELETE FROM film WHERE id='" . $_POST['delete'] . "'");
header('location:http://localhost/tanya29/kinopoisk/admin.php');
			?>