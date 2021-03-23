<?php 


 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<style type="text/css">


 		body{
 			background-color: #00d8ff;
 			margin: 0px;
 		}
 		
 		.container {
		width: 100vw;
		height: 100vh;
		background: #54BBD1;
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
		}

		.form_box {
		width: 300px;
		height: 200px;
		background: #fff;

		border-radius: 20px;
		}
 	</style>
 </head>
 <body >

 	<div class="container">


 		<div class="form_box">

 			<form action="logar.php" method="POST">
 				<center>
 					<h1>Login</h1>
	 				<input type="text" name="email" placeholder="Email" required="">
	 				<br>
	 				<br>
	 				<input type="password" name="senha" placeholder="Senha" required="">
	 				<br>
	 				<br>
	 				<input type="submit" name="" value="login">		
 				</center>
 			</form>
 			
 		</div>
 	</div>

 </body>
 </html>