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
		$result3=mysqli_query($connect, "SELECT * FROM users1 WHERE id='".$_GET['id']."'");
		$res3=$result3->fetch_assoc();
		$userid=$_GET['id']
	?>
	<?php	
				for($i=0;$i<2;$i++){
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
					</div>
					<?php 
						}
	 ?>
	 <a href="main2.php">Другие</a>
	 <hr>
	 
<h2>	
	NEWS
</h2>
	<?php 
				for($i=0;$i<$result->num_rows;$i++){
					$res=$result->fetch_assoc();
					?>
					<div>
						<?php
							echo '<img  src=" ' . $res['img'] . '"</img>';
							?>
							<?php
							echo '<p>' . $res['post_text'] . '</p>';
							
						?>
					</div>
					<?php 
						}
					 ?>
</body>
</html>