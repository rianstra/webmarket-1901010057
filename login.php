	<?php
	session_start();

	require'koneksi.php';

	if (isset($_POST['login'])) {
		$username = $_POST['txtusername'];
		$password = $_POST['txtpassword'];

		$query = mysqli_query($koneksi,"SELECT * FROM user WHERE 
			username='$username' and password='$password' ");

		$_SESSION['login'] = true;

		if (mysqli_num_rows($query) === 1 ) {

			$data = mysqli_fetch_object($query);

			
			
			header('location:index1.php');

		}

		echo $error = 'username atau password salah';
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	</head>

	<body>
		<div class ="container">
			<div class="row mt-3">
				<div class="col-4">
					<div class="Card card-body">
						<h3>login form</h3>
						<form action="" method="post">
							<input type="text" name="txtusername" class="form-control mb-3" placeholder="masukan username">
							<input type="Password" name="txtpassword" class="form-control mb-3" placeholder="masukan password">
							<input type="submit" value="login" name="login" class="btn btn-primary">
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>