
<?php
/*
	$servername ='localhost';
	$username='root';
	$password='';
	$dbname='base1';
	$con= new mysqli($servername,$username,$password, $dbname);
	if ($con->connect_error){
		die('error');
	}
	//$sql="SELECT * FROM users ";
	mysql_select_db ("base1",$con);*/
/*
	require_once 'db_connect.php';
		$db = new DB_CONNECT();

	var $log=$_GET['login'];
	var $fn=$_GET['fname'];
	var $ln=$_GET['lname'];
	//$uid=$_GET['user_id'];
	var $au=$_GET['au'];
	var $date=$_GET['date'];
	var $ps=$_GET['pass'];

	$sql = "INSERT INTO `users` (`user_id`, `login`, `password`, `first_name`, `last_name`, `group_au`, `date_creation`) VALUES (NULL,"$log","$ps","$fn","$ln","$au","$date")";
	mysql_query($sql) or die(mysql_error());

	/*
	$sql="SELECT * FROM users ";
	$result=$con->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['login']; ?></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['group_au']; ?></td>
			<td><?php echo $row['date_creation']; ?></td>
			<td><a href=""><img src="https://openclipart.org/image/2400px/svg_to_png/231633/Colorful-Circle-Fractal.png" width=20 height=20/></a></td>      
			</tr>
			<?php
		}
	}*/


	require 'db_connect.php';
	
	$db = new DB_CONNECT();

	$log = $_GET['login'];
	$fn = $_GET['fname'];
	$ln = $_GET['lname'];
	$au = $_GET['au'];
	$date = $_GET['date'];
	$ps = $_GET['pass'];

	$sql = "INSERT INTO `users` (`user_id`, `login`, `password`, `first_name`, `last_name`, `group_au`, `date_creation`) VALUES (NULL, '$log', '$ps', '$fn', '$ln', '$au', '$date');";
	mysql_query($sql) or die(mysql_error());

	header("Location: p1.php");

	?>