<?php
session_start();
$login = $_POST['login'];
$password1 = $_POST['password'];


	$servername ='localhost';
	$username='root';
	$password='';
	$dbname='base1';
	$con= new mysqli($servername,$username,$password, $dbname);
	if ($con->connect_error){
		die('error');
	}

	$sql="SELECT * FROM Users ";

	$result=$con->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			if($row['login']==$login){


				if($row['password']==$password1){
					$_SESSION['login'] = $login;
					header("Location: index.php");
					break;
					echo 'Hello'.$_SESSION['login'];
					
				}else{
					unset($_SESSION['login']);
					header("Location: index.php");
				}
			}
		}
	}
/*unset($_SESSION['login']);
				/*	header("Location: index.php");*/
		

	?>




