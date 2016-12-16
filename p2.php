
<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div class="container clearfix">
		<div class="main">
			<?php include 'test.php' ?>
			<?php include 'modalP2.php' ?>

	<div class="content-table">
	<table>
    <thead>
        <tr><th colspan="4">Categories</th></tr>
        <tr>
        <th >id</th>
        <th >title</th>
        <th >url_img</th>
        <th >action</th>
        </tr>
    </THead>
    <TBody>
<?php
	$servername ='localhost';
	$username='root';
	$password='';
	$dbname='base1';
	$con= new mysqli($servername,$username,$password, $dbname);
	if ($con->connect_error){
		die('error');
	}
	
	$sql="SELECT * FROM Categories ";
	$result=$con->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			?>
			<tr><td><?php echo $row['id']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['url_img']; ?></td>
			<td><a href=""><img src="https://openclipart.org/image/2400px/svg_to_png/231633/Colorful-Circle-Fractal.png" width=20 height=20/></a></td>      
			</tr>
			<?php
		}
	}

	?>
    </TBody>
    </table> 
    <button class="myButton bu" id="myLog">Add</button>
    </div>
    </div>
    </div>
    <footer>
	</footer>
    <script src="images.js"></script>
</div>