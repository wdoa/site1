
			<div class="title">
				<img class="titleIm" src="web/assets/img/t.png"/>
				<div class="titleT">
				Boring
				</div>
			</div>
			<div class="menu">
				<div class="nav">
					<ul >
						<li>
							<a href="index.php"><h4>Home</h4></a>
						</li>
						<li>
							<a href="News.php"><h4>News</h4></a>
							<ul>

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
											<li><a href=""><?php echo $row['title']; ?></a></li>
											<?php
										}
									}

	?>
							</ul>
						</li>
						<li>
							<a href="Contacts.php"><h4>Contacts</h4></a>
						</li>
						<li>

							<a href="javascript: void(0);" id="myBtn"><h4>Login</h4></a>
						</li>
					</ul>
				</div>
			</div>

