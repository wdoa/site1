<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include 'login.php' ?>
	<div class="fon-test">
	</div>
	<!--<div class="container clearfix">-->
		<div class="main">
			<?php include 'test.php' ?>
		<div class="content">
			
			
		</div>
	<div class="content-table">
		<?php
		$servername ='localhost';
		$username='root';
		$password='';
		$dbname='base1';
		$con= new mysqli($servername,$username,$password, $dbname);
		if ($con->connect_error){
			die('error');
		}
		
		$sql="SELECT * FROM categories ";
		$result=$con->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				?>
				<div class="lblock">
				<div class="cICont">
				<img class="cImg" src="<?php echo $row['url_img']; ?>" />   
				</div>
				<div class="cText"><a href=""><?php echo $row['title']; ?></a></div>
				</div>
			<?php
		}
	}

	?>

</div>
	</div>
	<footer>
	</footer>
	</body>
	<script src="images.js"></script>
</html>
