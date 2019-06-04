<?php 
$connect = mysqli_connect('127.0.0.1','root','','tanya29'); 
$result = mysqli_query($connect, "INSERT INTO comm (user,kino,post_text,film_id)  VALUES ('". $_POST['userid'] ."','". $_POST['kino'] ."','". $_POST['mess'] ."','". $_POST['id'] ."')");
header('location:http://localhost/tanya29/kinopoisk/film2.php?id='.$_POST['id'].'&id2='.$_POST['userid'].'');
echo $connect->query($result);
//echo $_POST['userid'];
 ?>