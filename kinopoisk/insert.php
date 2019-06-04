<?php
$connect = mysqli_connect('127.0.0.1','root','','tanya29'); 
//$header="instagram";
//$text="Вы успешно зарегались";
$result = mysqli_query($connect, "INSERT INTO users1 (mail, name, user,password,avatar)  VALUES ('". $_POST['mail'] ."','". $_POST['name'] ."','". $_POST['user'] ."','". $_POST['password'] ."','images/". $_FILES['avatar']['name'] ."')");
move_uploaded_file($_FILES['avatar']['tmp_name'], "images/".$_FILES['avatar']['name']);
header('location:http://localhost/tanya29/kinopoisk/login.php');
echo $connect->query($result);
?>