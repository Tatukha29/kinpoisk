<?php
$connect = mysqli_connect('127.0.0.1','root','','Tanya29'); 
$result = mysqli_query($connect, "INSERT INTO film (img,post_text,year)  VALUES ('images/". $_FILES['img']['name'] ."','". $_POST['post_text'] ."','". $_POST['year'] ."')");
move_uploaded_file($_FILES['img']['tmp_name'], "images/".$_FILES['img']['name']);
header('location:http://localhost/tanya29/kinopoisk/admin.php');
echo $connect->query($result);

?>