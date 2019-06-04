<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
$connect = mysqli_connect('127.0.0.1','root','','tanya29');
$query=mysqli_query($connect, "SELECT * FROM comm INNER JOIN film ON comm.film_id=film.id");
$result=mysqli_query($connect, "SELECT * FROM film WHERE id='".$_GET['id']."'");
$result2=mysqli_query($connect, "SELECT * FROM comm ");
$result3=mysqli_query($connect, "SELECT * FROM users1 WHERE id='".$_GET['id2']."' ");
$res=$result->fetch_assoc();
$res2=$result2->fetch_assoc();
$res3=$result3->fetch_assoc();
$userid=$_GET['id2'];

 ?>
 <?php 
echo '<img src=" ' . $res['img'] . '"></img>';
echo '<p>'.$res['post_text'].'</p>';
echo '<p>'.$res['year'].'</p>';
echo '<p>'.$res['opisanie'].'</p>';

  ?>
  <form method="POST" class="dropdown-item" action="comm.php" enctype="multipart/form-data">
  	<input type="" name="mess">
  	<button>ok</button>
<?php 
	  echo '<input type="hidden" name="userid" value="' . $userid . '">';
	  echo '<input type="hidden" name="id" value="' . $res['id'] . '">';
	  echo '<input type="hidden" name="kino" value="' . $res['post_text'] . '">';
 ?>
  </form>
  <?php 
				for($i=1;$i<$result2->num_rows;$i++){
					$res2=$result2->fetch_assoc();
					?>
					<div>
						<?php if($_GET['id']==$res2['film_id']){
							echo '<h4>' . $res2['user'] . '</h4>';
							echo '<p>' . $res2['post_text'] . '</p> <hr>';
							}
						?>
					</div>
					<?php 
						}
					 ?>
					
</body>
</html>