<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<center>
		<h1 style="margin-top: 20px; margin-bottom: 20px">CREATE ACCOUNT</h1>
		<form method="POST">
			<table>
				<div class="form-group" style="width: 300px">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username">
				</div>
				<div class="form-group" style="width: 300px;">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>
				<div class="form-group" style="width: 300px;">
					<label for="exampleInputPassword1">Re-type Password</label>
					<input type="password" class="form-control" id="confirm" name="confirm" placeholder="Confirm Password">
				</div>
				<div class="form-group" style="width: 300px">
						<label for="exampleInputEmail1">Email</label>
						<input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="name@example.com">
				</div>
				<div class="form-group" >
					<button type="submit" class="btn btn-primary" name="submit">Create</button>
				</div>
			</table>
		</form>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</center>
</body>
</html>

<?php
include 'koneksi.php';
if(isset($_POST['submit'])) {
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$email = $_POST['email'];
	$cek = true;

	if(empty($username)) {
		echo "Username tidak boleh kosong";
		$cek = false;
	}

	if(md5($password) != md5($confirm)) {
		echo "Password tidak sesuai";
		$cek = false;
	}

	if($cek==true){
		$cekpass = md5($password);
		$input = mysqli_query($conn, "INSERT INTO t_ta8_user VALUES ('$username','$cekpass','$email')");
		if(!$input) {
			echo "GAGAL";
		} else {
			header("Location:index.php");
		}
	}
}
?>