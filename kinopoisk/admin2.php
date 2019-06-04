<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
		$connect = mysqli_connect('127.0.0.1','root','','tanya29');
		$result=mysqli_query($connect, "SELECT * FROM news");
		$result2=mysqli_query($connect, "SELECT * FROM film");
		$result3=mysqli_query($connect, "SELECT * FROM users1");
		$res3=$result3->fetch_assoc();
		$userid=$res3['user'];
	?>
	<form  method="POST" class="dropdown-item" action="post2.php" enctype="multipart/form-data">
	<input type="file" name="img">
 <input type="" name="post_text">
 <input type="" name="opisanie">
  <input type="" name="year">
 <button type="submit">
 	Ok
 </button>
	</form>
	<?php	
				for($i=0;$i<$result2->num_rows;$i++){
					$res2=$result2->fetch_assoc();
					?>
					<h2>	
						FILMS
					</h2>
					<div >
						<form method="POST" class="dropdown-item" action="filmmain.php" enctype="multipart/form-data">
							
						<?php
							echo '<img  name="img" src=" ' . $res2['img'] . '"></img>';
							?>
							<?php
							echo '<p name="post_text"> ' . $res2['post_text'] . '</p>';
							echo '<p name="year"> ' . $res2['year'] . '</p>';
							echo '<button>ok</button>';
							echo '<input type="hidden" name="id" value="' . $res2['id'] . '">';
							echo '<input type="hidden" name="userid" value="' . $userid . '">';
						?>

						</form>
						<form method="POST" class="dropdown-item" action="delete.php">
							<?php 
							echo '<button name="delete" " value="'.$res2['id'].'">delete</button>'
							?>
						</form>
					</div>
					<?php 
						}
	 ?>